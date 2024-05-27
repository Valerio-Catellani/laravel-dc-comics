<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = [
            'navMenuLinks' => json_decode(file_get_contents(__DIR__ . "/../../database/seeders/mydb.json"), true)['headerMenu'],
            'footerMenuLinks' => json_decode(file_get_contents(__DIR__ . "/../../database/seeders/mydb.json"), true)['footerMenu']
        ];
        view()->share(compact('data'));
    }
}
