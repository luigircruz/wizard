<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class TE extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createTEFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/te')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/te')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create TE specific files.
     *
     * @return void
     */
    protected static function createTEFiles()
    {
        copy(__DIR__.'/en-stubs/app.stub', getcwd() .'/presets/config/te/app.php');
        static::createTranslationsFile("TE");
        static::createIndexFile("te", "te");
    }
}
