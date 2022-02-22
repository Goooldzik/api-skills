<?php

namespace App\Jobs;

use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Services\API\CommentService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateCommentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $post = Post::all()->random();
        $api = new CommentService();

        $request = new CommentRequest([
            'content' => 'tak',
            'author'  => 'AutomaticCommentJob'
        ]);

        $api->storeNewComment($request, $post);

    }
}
