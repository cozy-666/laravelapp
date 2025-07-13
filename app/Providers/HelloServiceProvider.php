<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register a view composer for the 'hello.index' view
        View::composer(
            'hello.index', function ($view) {
            $view->with('view_message', 'composer message!');
        });
    }
}
