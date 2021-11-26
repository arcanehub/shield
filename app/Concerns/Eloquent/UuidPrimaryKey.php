<?php

namespace App\Concerns\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait UuidPrimaryKey
{

    public static function bootUuidPrimaryKey(): void
    {
        static::saving(static function (Model $model) {

            if (empty($model->getKey())) {
                $model->{$model->getKeyName()} = (string)Str::uuid();
            }

        });
    }

    public function getIncrementing(): bool
    {
        return false;
    }

    public function getKeyType(): string
    {
        return 'string';
    }

}
