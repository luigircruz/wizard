<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class KR extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createKRFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/kr')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/kr')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create KR specific files.
     *
     * @return void
     */
    protected static function createKRFiles()
    {
        static::createTranslationsFile("KR");
        static::createIndexFile("kr", "ko");
    }
}
