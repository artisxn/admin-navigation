<?php

namespace codicastudio\CollapsibleResourceManager;

use Illuminate\Support\ServiceProvider;

class CollapsibleResourceManagerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin-navigation');
    }

}
