<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class IN extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createINFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/in')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/in')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create IN specific files.
     *
     * @return void
     */
    protected static function createINFiles()
    {
        copy(__DIR__.'/in-stubs/index.stub', getcwd() .'/presets/in/index.php');
        copy(__DIR__.'/in-stubs/app.stub', getcwd() .'/presets/config/in/app.php');
        copy(__DIR__.'/in-stubs/translations.stub', getcwd() .'/presets/config/in/translations.php');
    }
}
