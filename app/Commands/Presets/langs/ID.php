<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class ID extends Preset
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
        static::createTranslationsFile("ID");
        static::createIndexFile("id", "id");
    }
}
