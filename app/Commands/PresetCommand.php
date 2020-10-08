<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;

class PresetCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = "make:preset
                    { type : The preset type (generic, registration) }
                    { --lang=* : Language pages to generate. Example: ['en', 'id', 'in', 'kr', 'sc', 'th', 'vn'] }";

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Generates a preset template for your landing page';

    /**
     * Execute the console command.
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function handle()
    {
        if (! in_array($this->argument('type'), ['generic', 'registration'])) {
            throw new InvalidArgumentException('Invalid preset type!');
        }

        $this->{$this->argument('type')}();

        if ($this->option('lang')) {
            foreach ($this->option('lang') as $lang) {
                if (! in_array($lang, ['en', 'id', 'in', 'kr', 'sc', 'th', 'vn'])) {
                    throw new InvalidArgumentException('The specified language doesn\'t exist!');
                }
                
                $this->{$lang}();
            }
        }

        $this->comment('You may now extract your generic template from the created presets directory.');
        
    }

    /**
     * Install the "generic" preset.
     *
     * @return void
     */
    protected function generic()
    {
        Presets\Generic::install();

        $this->info('Generic Preset created successfully.');
    }

    /**
     * Install EN language page.
     *
     * @return void
     */
    protected function en()
    {
        Presets\Langs\EN::install();
    }

    /**
     * Install ID language page.
     *
     * @return void
     */
    protected function id()
    {
        Presets\Langs\ID::install();
    }

    /**
     * Install IN language page.
     *
     * @return void
     */
    protected function in()
    {
        Presets\Langs\IN::install();
    }

    /**
     * Install KR language page.
     *
     * @return void
     */
    protected function kr()
    {
        Presets\Langs\KR::install();
    }

    /**
     * Install SC language page.
     *
     * @return void
     */
    protected function sc()
    {
        Presets\Langs\SC::install();
    }

    /**
     * Install TH language page.
     *
     * @return void
     */
    protected function th()
    {
        Presets\Langs\TH::install();
    }

    /**
     * Install VN language page.
     *
     * @return void
     */
    protected function vn()
    {
        Presets\Langs\VN::install();
    }
}
