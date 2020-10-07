<?php

namespace App\Commands\Presets;

class Generic extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
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
        copy(__DIR__.'/generic-stubs/index.php', base_path('presets/en/index.php'));
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
     * Update PHP files for the application.
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
}
