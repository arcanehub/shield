<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public string $method;

    public function __construct(string $method = 'get')
    {
        $this->method = strtolower($method);
    }

    public function render()
    {
        return view('components.form');
    }
}
