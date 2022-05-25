<?php

namespace TIGIrapuato\LaraSUU;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\AliasLoader;
use App\Helpers\Helper;
use Illuminate\Support\Facades\View;


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


        //Menu template
        // get all data from menu.json file
        $verticalMenuJson = file_get_contents(base_path('/../stubs/default/resources/data/menu-data/verticalMenu.json'));
        $verticalMenuData = json_decode($verticalMenuJson);
        $horizontalMenuJson = file_get_contents(base_path('/../stubs/default/resources/data/menu-data/horizontalMenu.json'));
        $horizontalMenuData = json_decode($horizontalMenuJson);

         // Share all menuData to all the views
        View::share('menuData',[$verticalMenuData, $horizontalMenuData]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->booting(function() {
            $loader = AliasLoader::getInstance();
            $loader->alias('Helper', Helper::class);
        });

        foreach (glob(app_path() . '/Helpers/*.php') as $helpersfilename)
        {
            require_once($helpersfilename);
        }
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
