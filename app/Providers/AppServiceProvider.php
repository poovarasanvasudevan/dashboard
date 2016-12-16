<?php

namespace App\Providers;

use Config;
use Illuminate\Support\ServiceProvider;
use Parse\ParseClient;
use Parse\ParseSessionStorage;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        ParseClient::initialize(Config::get('shpt.parse_app_id'), Config::get('shpt.parse_rest_key'), Config::get('shpt.parse_master_key'));
        ParseClient::setServerURL(Config::get('shpt.parse_base_url'), Config::get('shpt.parse_path'));
       // ParseClient::setStorage( new ParseSessionStorage() );


        $menu = Config::get('shpt.menu');
        View::share('menus', $menu);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
