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
                    { type : The preset type (generic, registration) }';

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
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
