<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class GR extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createGRFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/gr')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/gr')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create GR specific files.
     *
     * @return void
     */
    protected static function createGRFiles()
    {
        static::createTranslationsFile("GR");
        static::createIndexFile("gr", "el");
    }
}
