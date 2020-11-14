<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;
use App\Commands\Presets\Preset;

class PT extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createPTFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/pt')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/pt')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create EN specific files.
     *
     * @return void
     */
    protected static function createPTFiles()
    {
        copy(__DIR__.'/pt-stubs/app.stub', getcwd() .'/presets/config/pt/app.php');
        static::createTranslationsFile("PT");
        static::createIndexFile("pt", "pt");
    }
}
