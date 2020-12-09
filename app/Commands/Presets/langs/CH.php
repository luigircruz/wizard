<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class CH extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createCHFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/ch')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/ch')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create CH specific files.
     *
     * @return void
     */
    protected static function createCHFiles()
    {
        copy(__DIR__.'/sc-stubs/app.stub', getcwd() .'/presets/config/ch/app.php');
        static::createTranslationsFile("CH");
        static::createIndexFile("ch", "zh-Hant");
    }
}
