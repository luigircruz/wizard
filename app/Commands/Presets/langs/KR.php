<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;

class KR
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
        copy(__DIR__.'/kr-stubs/index.stub', getcwd() .'/presets/kr/index.php');
        copy(__DIR__.'/kr-stubs/app.stub', getcwd() .'/presets/config/kr/app.php');
        copy(__DIR__.'/kr-stubs/translations.stub', getcwd() .'/presets/config/kr/translations.php');
    }
}
