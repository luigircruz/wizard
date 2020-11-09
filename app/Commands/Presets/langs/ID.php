<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;

class ID
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createIDFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/id')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/id')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create ID specific files.
     *
     * @return void
     */
    protected static function createIDFiles()
    {
        copy(__DIR__.'/id-stubs/index.stub', getcwd() .'/presets/id/index.php');
        copy(__DIR__.'/id-stubs/app.stub', getcwd() .'/presets/config/id/app.php');
        copy(__DIR__.'/id-stubs/translations.stub', getcwd() .'/presets/config/id/translations.php');
    }
}
