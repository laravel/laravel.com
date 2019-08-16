<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ClearPageCache extends Command
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'docs:clear-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears the page cache';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = public_path('page-cache');

        if ($this->clearDirectory($path)) {
            $this->info("Page cache directory cleared at {$path}.");
        } else {
            $this->warn("Page cache directory not cleared at {$path}.");
        }
    }

    /**
     * Clear all contents of the given directory recursively.
     *
     * @param  string  $path
     * @return bool
     */
    protected function clearDirectory($path)
    {
        return $this->laravel->make(Filesystem::class)->deleteDirectory($path, true);
    }
}
