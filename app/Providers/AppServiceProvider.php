<?php

namespace App\Providers;

use App\User;
use Auth;
use Blade;
use const http\Client\Curl\AUTH_ANY;
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

//        $this->registerDirective(User::ADMIN);
//        $this->registerDirective(User::SALE);
//        $this->registerDirective(User::PROCESSING);

        Blade::if('role', function($role) {
            return Auth::user() && Auth::user()->hasRole($role);
        });
    }

    public function registerDirective($role)
    {
        Blade::directive($role, function () use ($role) {
            $isRole = false;

            // check if the user authenticated is teacher
            if ( Auth::user() && Auth::user()->hasRole($role)) {
                $isRole = true;
            }

            return "<?php if ($isRole) { ?>";
        });

        Blade::directive('endadmin', function () {
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
