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
        static::createLangDirectory();
        static::ensurePresetDirectoryExists();
        static::updateIndexPhp();
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
        copy(__DIR__.'/langs/en-stubs/index.php', base_path('presets/en/index.php'));
    }

    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateConfig()
    {
        copy(__DIR__.'/generic-stubs/config.php', base_path('presets/config.php'));
    }

    /**
     * Update Translation file for the application.
     *
     * @return void
     */
    protected static function updateTranslations()
    {
        copy(__DIR__.'/generic-stubs/translations.php', base_path('presets/translations.php'));
    }

    /**
     * Update the CSS files for the application.
     *
     * @return void
     */
    protected static function updateMainCss()
    {
        copy(__DIR__.'/generic-stubs/main.css', base_path('presets/css/main.css'));
    }

    /**
     * Update the JS files for the application.
     *
     * @return void
     */
    protected static function updateMainJs()
    {
        copy(__DIR__.'/generic-stubs/main.js', base_path('presets/js/main.js'));
    }

    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateTrackingJs()
    {
        copy(__DIR__.'/generic-stubs/tracking.js', base_path('presets/js/tracking.js'));
    }

    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function createLangDirectory()
    {
        $filesystem = new Filesystem;

        $filesystem->cleanDirectory(base_path('presets'));

        if (! $filesystem->exists($directory = base_path('presets/en'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }
}
