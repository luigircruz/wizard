<?php

namespace App\Commands\Presets\Langs;

use App\Commands\Presets\Preset;
use Illuminate\Filesystem\Filesystem;

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
        static::updateIndexPhp();
    }
    
    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateIndexPhp()
    {
        copy(__DIR__.'/kr-stubs/index.stub', base_path('presets/kr/index.php'));
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = base_path('presets/kr'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }
}
