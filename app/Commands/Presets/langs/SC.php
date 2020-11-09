<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;

class SC
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createSCFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/sc')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/sc')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create SC specific files.
     *
     * @return void
     */
    protected static function createSCFiles()
    {
        copy(__DIR__.'/sc-stubs/index.stub', getcwd() .'/presets/sc/index.php');
        copy(__DIR__.'/sc-stubs/app.stub', getcwd() .'/presets/config/sc/app.php');
        copy(__DIR__.'/sc-stubs/translations.stub', getcwd() .'/presets/config/sc/translations.php');
    }
}
