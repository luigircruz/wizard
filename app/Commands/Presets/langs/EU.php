<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class EU extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createEUFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/eu')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/eu')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create EU specific files.
     *
     * @return void
     */
    protected static function createEUFiles()
    {
        copy(__DIR__.'/en-stubs/app.stub', getcwd() .'/presets/config/eu/app.php');
        static::createTranslationsFile("EU");
        static::createIndexFile("eu", "en");
    }
}
