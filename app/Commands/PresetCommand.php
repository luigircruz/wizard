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
            $this->notify('Invalid Preset Type', 'The preset type that you have entered doesn\'t exists!');
            throw new InvalidArgumentException('Invalid preset type!');
        }

        $this->{$this->argument('type')}();

        if ($this->option('lang')) {
            foreach ($this->option('lang') as $lang) {
                if (! in_array($lang, ['en', 'id', 'in', 'kr', 'sc', 'th', 'vn'])) {
                    $this->notify('Invalid Language Argument', 'The language that you have specified doesn\'t exist!');
                    throw new InvalidArgumentException('The specified language doesn\'t exist!');
                }
                
                
                $this->{$lang}();
            }
        }

        $this->comment('You may now extract your template from the created presets directory.');
        $this->notify('Preset Succesfully Generated!', 'You may now extract your template from the created presets directory.');
        
    }

    /**
     * Install the "generic" preset.
     *
     * @return void
     */
    protected function generic() : void
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
        Presets\langs\EN::install();
    }

    /**
     * Install ID language page.
     *
     * @return void
     */
    protected function id()
    {
        Presets\langs\ID::install();
    }

    /**
     * Install IN language page.
     *
     * @return void
     */
    protected function in()
    {
        Presets\langs\IN::install();
    }

    /**
     * Install KR language page.
     *
     * @return void
     */
    protected function kr()
    {
        Presets\langs\KR::install();
    }

    /**
     * Install SC language page.
     *
     * @return void
     */
    protected function sc()
    {
        Presets\langs\SC::install();
    }

    /**
     * Install TH language page.
     *
     * @return void
     */
    protected function th()
    {
        Presets\langs\TH::install();
    }

    /**
     * Install VN language page.
     *
     * @return void
     */
    protected function vn()
    {
        Presets\langs\VN::install();
    }
}
