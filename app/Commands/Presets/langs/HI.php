<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class HI extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createHIFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/hi')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/hi')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create HI specific files.
     *
     * @return void
     */
    protected static function createHIFiles()
    {
        static::createTranslationsFile("HI");
        static::createIndexFile("hi", "hi");
    }
}
