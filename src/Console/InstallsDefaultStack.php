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
        // Controllers...
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Controllers/AuthSUU'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/App/Http/Controllers/AuthSUU', app_path('Http/Controllers/AuthSUU'));

        // Routes...
        copy(__DIR__.'/../../stubs/default/routes/authsuu.php', base_path('routes/auth.php'));
        copy(__DIR__.'/../../stubs/default/routes/websuu.php', base_path('routes/web.php'));
        

        $this->info('Lara SUU installed successfully.');
    }
}
