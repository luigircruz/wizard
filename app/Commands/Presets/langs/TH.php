<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;

class TH
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createTHFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/th')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/th')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create TH specific files.
     *
     * @return void
     */
    protected static function createTHFiles()
    {
        copy(__DIR__.'/th-stubs/index.stub', getcwd() .'/presets/th/index.php');
        copy(__DIR__.'/th-stubs/app.stub', getcwd() .'/presets/config/th/app.php');
        copy(__DIR__.'/th-stubs/translations.stub', getcwd() .'/presets/config/th/translations.php');
    }
}
