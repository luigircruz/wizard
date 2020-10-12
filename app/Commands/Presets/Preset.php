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

        $filesystem->cleanDirectory(base_path('../presets'));

        if (! $filesystem->isDirectory($directory = base_path('../presets/assets/css'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('../presets/assets/js'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('../presets/config'))) {
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
        copy(__DIR__.'/generic-stubs/config/app.php', base_path('../presets/config/app.php'));
    }

    /**
     * Update Translation file for the application.
     *
     * @return void
     */
    protected static function updateTranslations()
    {
        copy(__DIR__.'/generic-stubs/config/translations.php', base_path('../presets/config/translations.php'));
    }

    /**
     * Update the CSS files for the application.
     *
     * @return void
     */
    protected static function updateMainCss()
    {
        copy(__DIR__.'/generic-stubs/resources/assets/main.css', base_path('../presets/assets/css/main.css'));
    }

    /**
     * Update the JS files for the application.
     *
     * @return void
     */
    protected static function updateMainJs()
    {
        copy(__DIR__.'/generic-stubs/resources/assets/main.js', base_path('../presets/assets/js/main.js'));
    }

    /**
     * Update PHP files for the application.
     *
     * @return void
     */
    protected static function updateTrackingJs()
    {
        copy(__DIR__.'/generic-stubs/resources/assets/tracking.js', base_path('../presets/assets/js/tracking.js'));
    }
}
