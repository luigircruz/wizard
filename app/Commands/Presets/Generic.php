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
        static::updateConfig();
        static::updateTranslations();
        static::updateMainCss();
        static::updateMainJs();
        static::updateTrackingJs();
    }
}
