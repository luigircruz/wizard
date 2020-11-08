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
        static::ensurePresetDirectoryExists();
        static::createCommonFiles();
    }
}
