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

        $filesystem->cleanDirectory(getcwd() .'/presets');

        if (! $filesystem->isDirectory($directory = getcwd() .'/presets/config')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = getcwd() .'/presets/resources/css')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = getcwd() .'/presets/resources/js')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = getcwd() .'/presets/resources/views')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = getcwd() .'/presets/resources/views/layouts')) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = getcwd() .'/presets/resources/img')) {
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
        copy(__DIR__.'/generic-stubs/style.stub', getcwd() .'/presets/resources/css/style.css');
        copy(__DIR__.'/generic-stubs/script.stub', getcwd() .'/presets/resources/js/script.js');
        copy(__DIR__.'/generic-stubs/tracking.stub', getcwd() .'/presets/resources/js/tracking.js');
        copy(__DIR__.'/generic-stubs/main.stub', getcwd() .'/presets/resources/views/layouts/main.php');
        copy(__DIR__.'/generic-stubs/head.stub', getcwd() .'/presets/resources/views/head.php');
        copy(__DIR__.'/generic-stubs/footer.stub', getcwd() .'/presets/resources/views/footer.php');
    }
}
