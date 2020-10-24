<?php

namespace App\Commands\Presets;
use Illuminate\Filesystem\Filesystem;

class Generic extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::ensurePresetDirectoryExists();
        // static::createLangDirectory();
        // static::updateIndexPhp();
        static::updateConfig();
        static::updateTranslations();
        static::updateMainCss();
        static::updateMainJs();
        static::updateTrackingJs();
    }
    
    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateIndexPhp()
    {
        copy(__DIR__.'/langs/en-stubs/index.stub', base_path('../presets/en/index.php'));
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->exists($directory = base_path('../presets/en'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }
}
