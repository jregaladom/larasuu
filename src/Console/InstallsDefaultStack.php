<?php

namespace TIGIrapuato\LaraSUU\Console;

use Illuminate\Filesystem\Filesystem;

trait InstallsDefaultStack
{
    /**
     * Install the Blade Breeze stack.
     *
     * @return void
     */
    protected function installDefaultStack()
    {

         // NPM Packages...
        $this->updateNodePackages(function ($packages) {
            return [
                'cross-env' => '^5.2.1',
                'jquery' => '^3.6',
                'popper.js' => '^1.16.1',
                'resolve-url-loader'=> '^4.0.0',
                'rtlcss'=> '^3.0',
                'sass'=> '1.30.0',
                'sass-loader'=> '^11.0.1',
                "bootstrap"=> "~5.1.0"
            ] + $packages;
        });

        // Controllers...
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Controllers/Auth'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/App/Http/Controllers/Auth', app_path('Http/Controllers/Auth'));

        (new Filesystem)->ensureDirectoryExists(app_path('Http/Controllers/Template'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/App/Http/Controllers/Template', app_path('Http/Controllers/Template'));

        //Heper
        (new Filesystem)->ensureDirectoryExists(app_path('Helpers'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/Helpers', app_path('Helpers'));


        // Models...
        copy(__DIR__.'/../../stubs/default/App/Models/User.php', base_path('app/Models/User.php'));

        // Config ...
        copy(__DIR__.'/../../stubs/default/Config/database.php', base_path('config/database.php'));

        // Providers ...
        copy(__DIR__.'/../../stubs/default/App/Providers/MenuServiceProvider.php', base_path('app/Providers/MenuServiceProvider.php'));

        // Routes...
        copy(__DIR__.'/../../stubs/default/routes/authsuu.php', base_path('routes/auth.php'));
        copy(__DIR__.'/../../stubs/default/routes/websuu.php', base_path('routes/web.php'));
        copy(__DIR__.'/../../stubs/default/routes/templatesuu.php', base_path('routes/template.php'));


        // Views...
        (new Filesystem)->ensureDirectoryExists(resource_path('assets'));
        (new Filesystem)->ensureDirectoryExists(resource_path('data'));
        (new Filesystem)->ensureDirectoryExists(resource_path('fonts'));
        (new Filesystem)->ensureDirectoryExists(resource_path('images'));
        (new Filesystem)->ensureDirectoryExists(resource_path('js'));
        (new Filesystem)->ensureDirectoryExists(resource_path('lang'));
        (new Filesystem)->ensureDirectoryExists(resource_path('scss'));
        (new Filesystem)->ensureDirectoryExists(resource_path('vendors'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/assets', resource_path('assets'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/data', resource_path('data'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/fonts', resource_path('fonts'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/images', resource_path('images'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/js', resource_path('js'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/lang', resource_path('lang'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/scss', resource_path('scss'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/vendors', resource_path('vendors'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views', resource_path('views'));

        // Webpack...
        copy(__DIR__.'/../../stubs/default/webpack.mix.js', base_path('webpack.mix.js'));

        $this->info('Lara SUU installed successfully.');
        $this->comment('Please execute the "npm install" && "npm run dev" commands to build your assets.');
    }
}
