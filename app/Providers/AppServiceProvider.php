<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::directive('author', function () {
            $isAuth = false;

            // check if the user authenticated is teacher
            if (auth()->user() && auth()->user()->capability == 3) {

                $isAuth = true;
            }

            return "<?php if ($isAuth) { ?>";
        });

        Blade::directive('endauthor', function () {
            return "<?php } ?>";
        });
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
