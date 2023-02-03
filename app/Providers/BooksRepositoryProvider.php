<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BooksRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\BooksRepositoryInterface',
            'App\Repositories\Eloquent\BooksRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
