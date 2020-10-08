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
    protected $signature = 'make:preset
                    { type : The preset type (generic, registration) }
                    { --lang= : Creates a page for a language }';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Generate a preset template for your landing page';

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
            throw new InvalidArgumentException('Invalid preset!');
        }

        $this->{$this->argument('type')}();

        if ($this->option('lang')) {
            if (! in_array($this->option('lang'), ['en', 'id', 'in', 'kr', 'sc', 'th', 'vn'])) {
                throw new InvalidArgumentException('The specified language doesn\'t exist!');
            }

            $this->{$this->option('lang')}();
        }
        
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
        $this->comment('You may now extract your generic template from the presets directory.');
    }

    /**
     * Install EN language page.
     *
     * @return void
     */
    protected function en()
    {
        Presets\Langs\EN::install();

        $this->info('EN language created successfully.');
    }

    /**
     * Install ID language page.
     *
     * @return void
     */
    protected function id()
    {
        Presets\Langs\ID::install();

        $this->info('ID language created successfully.');
    }
}
