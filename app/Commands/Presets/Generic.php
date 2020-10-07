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
        static::updatePhp();
        static::updateCss();
        static::updateJs();
    }

    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updatePhp()
    {
        copy(__DIR__.'/generic-stubs/en/index.php', base_path('presets/en/index.php'));
    }

    /**
     * Update the CSS files for the application.
     *
     * @return void
     */
    protected static function updateCss()
    {
        copy(__DIR__.'/generic-stubs/css/main.css', base_path('presets/css/main.css'));
    }

    /**
     * Update the JS files for the application.
     *
     * @return void
     */
    protected static function updateJs()
    {
        copy(__DIR__.'/generic-stubs/js/main.js', base_path('presets/js/main.js'));
    }
}
