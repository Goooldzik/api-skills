<?php

namespace App\Jobs;

use App\Http\Requests\PostRequest;
use App\Services\API\PostService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreatePostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return  void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return  void
     */
    public function handle()
    {
        $api = new PostService();

        $request = new PostRequest([
            'title'     =>   'Automatyczny post',
            'content'   =>   'Post dodawany automatycznie codziennie o godzinie 13',
            'author'    =>   'AutomaticPostJob'
        ]);

        $api->storeNewPost($request);
    }
}
