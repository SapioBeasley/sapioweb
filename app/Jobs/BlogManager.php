<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BlogManager extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $github;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->github = new \App\Libraries\Github();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $gists = $this->github->getGists();

        foreach($gists as $gist){
            $this->saveGist($gist);
        }
    }

    public function saveGist($gist)
    {
        if ($this->checkDuplicate($gist)) {
            $blog = \App\Blog::create([
                'gist_id' => $gist->id,
                'description' => $gist->description,
            ]);
        }
    }

    public function checkDuplicate($gist)
    {
        $blog = \App\Blog::where('gist_id', '=', $gist->id)->first();

        switch ($blog) {
            case null:
                return true;
                break;

            default:
                return false;
                break;
        }
    }
}
