<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SidebarComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composeSidebar();
    }

    public function composeSidebar(){
        //view()->composer('partials._navbar','App\Http\Composers\SidebarComposer');

        view()->composer('backend.app.section._left-sidebar','App\Http\Composers\SidebarComposer');

    }
}
