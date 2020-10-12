<?php

namespace App\Commands\Presets\Langs;

use App\Commands\Presets\Preset;
use Illuminate\Filesystem\Filesystem;

class TH extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::createLangDirectory();
        static::updateIndexPhp();
    }
    
    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateIndexPhp()
    {
        copy(__DIR__.'/th-stubs/index.php', base_path('../presets/th/index.php'));
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = base_path('../presets/th'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }
}
