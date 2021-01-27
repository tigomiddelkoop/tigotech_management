<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
//            Route::middleware('api')
//                ->namespace($this->namespace)
//                ->group(base_path('routes/api.php'));
//
            // Paths for the discord bot
            Route::prefix("discord")
                ->middleware('api')
                ->name($this->namespace)
                ->group(base_path('routes/discord.php'));

            // Paths for the homepage
            Route::prefix("tigotech")
                ->middleware('api')
                ->name($this->namespace)
                ->group(base_path('routes/tigotech.php'));

            // Paths for the infra
            Route::prefix("infra")
                ->middleware('api')
                ->name($this->namespace)
                ->group(base_path('routes/infra.php'));

            // Paths for the blog
            Route::prefix("blog")
                ->middleware('api')
                ->name($this->namespace)
                ->group(base_path('routes/blog.php'));

            // Paths for the management
            Route::prefix("management")
                ->middleware('api')
                ->name($this->namespace)
                ->group(base_path('routes/management.php'));
        });

    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
