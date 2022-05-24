<?php

namespace TIGIrapuato\LaraSUU;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class LoginSUUProvider extends ServiceProvider
{

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);

        $this->mergeConfigFrom(
            __DIR__ . '/../stubs/default/config/authsuu.php',
            'authsuu'
        );

        $this->publishes([
            __DIR__ . '/../stubs/default/config/authsuu.php' => config_path('authsuu.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__ . '/../stubs/default/config/template.php',
            'template'
        );

        $this->publishes([
            __DIR__ . '/../stubs/default/config/template.php' => config_path('template.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Console\InstallCommand::class];
    }


    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAuthSUURoutes()
    {
        Route::prefix('authsuu')
            ->namespace($this->namespace)
            ->group(base_path('routes/authsuu.php'));
    }
}
