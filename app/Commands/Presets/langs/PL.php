<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class PL extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createPLFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/pl')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/pl')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create PL specific files.
     *
     * @return void
     */
    protected static function createPLFiles()
    {
        static::createTranslationsFile("PL");
        static::createIndexFile("pl", "pl");
    }
}
