<?php

namespace App\Commands\Presets\langs;

use Illuminate\Filesystem\Filesystem;

class VN
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::createVNFiles();
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = getcwd() .'/presets/vn')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->exists($directory = getcwd() .'/presets/config/vn')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create VN specific files.
     *
     * @return void
     */
    protected static function createVNFiles()
    {
        copy(__DIR__.'/vn-stubs/index.stub', getcwd() .'/presets/vn/index.php');
        copy(__DIR__.'/vn-stubs/app.stub', getcwd() .'/presets/config/vn/app.php');
        copy(__DIR__.'/vn-stubs/translations.stub', getcwd() .'/presets/config/vn/translations.php');
    }
}
