<?php

namespace App\Console\Commands;
use App\Hil;
use Illuminate\Console\Command;
use App\Events\NewHil;

class check extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:time';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will check if a hil did not retrieve data from server';

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
       $hils=Hil::all();
       
       $hils->each(function ($hil) {

            $last = $hil->hilentries()->orderBy('created_at', 'desc')->first();
            $minutes = (time() - strtotime($last->date) ) / 60;

            if($minutes>2)
                event(new NewHil('asdasds'));
           });
      
        return 0;
    }
}
