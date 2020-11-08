<?php

namespace App\Commands\Presets;

use Illuminate\Filesystem\Filesystem;

class Preset
{
    /**
     * Ensure the preset directories we need exist.
     *
     * @return void
     */
    protected static function ensurePresetDirectoryExists()
    {
        $filesystem = new Filesystem;

        $filesystem->cleanDirectory(base_path('presets'));

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/css'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/js'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/config'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/config/translations'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateConfig()
    {
        copy(__DIR__.'/generic-stubs/config/app.stub', base_path('presets/resources/config/app.php'));
    }

    /**
     * Update Translation file for the application.
     *
     * @return void
     */
    protected static function updateTranslations()
    {
        copy(__DIR__.'/generic-stubs/config/translations.stub', base_path('presets/resources/config/translations/translation-en.php'));
    }

    /**
     * Update the CSS files for the application.
     *
     * @return void
     */
    protected static function updateMainCss()
    {
        copy(__DIR__.'/generic-stubs/resources/assets/style.stub', base_path('presets/resources/css/main.css'));
    }

    /**
     * Update the JS files for the application.
     *
     * @return void
     */
    protected static function updateMainJs()
    {
        copy(__DIR__.'/generic-stubs/resources/assets/script.stub', base_path('presets/resources/js/main.js'));
    }

    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateTrackingJs()
    {
        copy(__DIR__.'/generic-stubs/resources/assets/tracking.stub', base_path('presets/resources/js/tracking.js'));
    }
}
