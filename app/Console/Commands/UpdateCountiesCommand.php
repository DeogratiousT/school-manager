<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\County;

class UpdateCountiesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'counties:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates information on Counties';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $counties = config('counties.counties');
        
        foreach ($counties as $county) {
            County::updateOrcreate(['code' => $county['code']],
                [
                'name' => $county['name']
            ]);
        }

        return $this->info('Counties Information Updated Successfully');
    }
}
