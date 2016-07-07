<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateNewsLetter extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $newsletter = \App\Newsletter::create($this->data);

        if ($newsletter->exists()) {
            \Mail::queue('emails.doubleOpt', $newsletter->toArray(), function ($message) use ($newsletter) {
                $message->to($newsletter->email)->subject('Thank you from SapioWeb!');
            });
        }
    }
}
