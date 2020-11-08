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

        if (! $filesystem->isDirectory($directory = base_path('presets/config'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/css'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/js'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/views'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/views/layouts'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/resources/img'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Create common files for the application.
     *
     * @return void
     */
    protected static function createCommonFiles()
    {
        copy(__DIR__.'/generic-stubs/style.stub', base_path('presets/resources/css/style.css'));
        copy(__DIR__.'/generic-stubs/script.stub', base_path('presets/resources/js/script.js'));
        copy(__DIR__.'/generic-stubs/tracking.stub', base_path('presets/resources/js/tracking.js'));
        copy(__DIR__.'/generic-stubs/main.stub', base_path('presets/resources/views/layouts/main.php'));
        copy(__DIR__.'/generic-stubs/head.stub', base_path('presets/resources/views/head.php'));
        copy(__DIR__.'/generic-stubs/footer.stub', base_path('presets/resources/views/footer.php'));
    }
}
