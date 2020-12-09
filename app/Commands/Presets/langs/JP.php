<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class JP extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createJPFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/jp')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/jp')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create JP specific files.
     *
     * @return void
     */
    protected static function createJPFiles()
    {
        copy(__DIR__.'/en-stubs/app.stub', getcwd() .'/presets/config/jp/app.php');
        static::createTranslationsFile("JP");
        static::createIndexFile("jp", "ja");
    }
}
