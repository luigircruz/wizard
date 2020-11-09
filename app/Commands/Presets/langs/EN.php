<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;

class EN
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createENFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/en')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/en')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create EN specific files.
     *
     * @return void
     */
    protected static function createENFiles()
    {
        copy(__DIR__.'/en-stubs/index.stub', getcwd() .'/presets/en/index.php');
        copy(__DIR__.'/en-stubs/app.stub', getcwd() .'/presets/config/en/app.php');
        copy(__DIR__.'/en-stubs/translations.stub', getcwd() .'/presets/config/en/translations.php');
    }
}
