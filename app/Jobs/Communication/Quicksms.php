<?php

namespace App\Jobs\Communication;

use App\Notifications\Quickmail\sendquickmail;
use App\Notifications\Quickmail\sendquickmailwithfile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class Quicksms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to;
    public $composer;
    public $html;
    public $from;
    public $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to,$composer,$html,$file,$from)
    {
        $this->to = $to;
        $this->composer = $composer;
        $this->html = $html;
        $this->file = $file;
        $this->from = $from;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->file == 'false') {
            
            Notification::route('mail', $this->from)
             ->notify(new sendquickmail($this->to,$this->composer,$this->html,$this->from));

        }else{

            Notification::route('mail', $this->from)
             ->notify(new sendquickmailwithfile($this->to,$this->composer,$this->html,$this->file,$this->from));
        }
        
    }
}
