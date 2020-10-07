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

        if (! $filesystem->isDirectory($directory = base_path('presets/en'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/css'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }

        if (! $filesystem->isDirectory($directory = base_path('presets/js'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }
}
