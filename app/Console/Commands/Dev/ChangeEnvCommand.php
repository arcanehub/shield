<?php

namespace App\Console\Commands\Dev;

use Illuminate\Console\Command;

class ChangeEnvCommand extends Command
{

    protected $signature = 'env:set';
    protected $description = 'Change environment of current application in all places';

    protected function replaceInFile(string $file, $search, $replace)
    {
        $file = base_path($file);

        if (!file_exists($file)) {
            return;
        }

        $search = is_array($search) ? $search : [$search];
        $replace = is_array($replace) ? $replace : [$replace];

        $content = file_get_contents($file);

        file_put_contents($file, $replace = preg_replace($search, $replace, $content));
    }

    public function handle()
    {
        $this->alert("Dangerous command!");

        if (!$this->confirm('Are you sure to change env of this project?')) {
            $this->line('Aborting');
            return static::SUCCESS;
        }

        $composer = $this->choice('Composer json min. stability', [
            'dev',
            'alpha',
            'beta',
            'stable',
            'rc',
        ]);

        $this->replaceInFile('composer.json', "/\"minimum-stability\": \".*\"/", "\"minimum-stability\": \"{$composer}\"");

        $app = $this->choice('App env', [
            'local', 'production'
        ]);

        $this->replaceInFile('.env', "/APP_ENV=.*/", "APP_ENV={$app}");

        $koolRegex = "/image: kooldev\/php:8\.0-nginx.*/";

        if ($app === 'local') {
            $this->replaceInFile("docker-compose.yml", $koolRegex, "image: kooldev/php:8.0-nginx");
            $this->replaceInFile('.env', "/APP_DEBUG=.*/", "APP_DEBUG=true");
        } elseif ($app === 'production') {
            $this->replaceInFile("docker-compose.yml", $koolRegex, "image: kooldev/php:8.0-nginx-prod");
            $this->replaceInFile('.env', "/APP_DEBUG=.*/", "APP_DEBUG=false");
        }

        return static::SUCCESS;
    }
}
