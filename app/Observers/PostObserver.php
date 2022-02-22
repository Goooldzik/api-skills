<?php

namespace App\Observers;

use App\Models\CrudAction;
use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param   Post $post
     * @return  void
     */
    public function created(Post $post)
    {
        CrudAction::query()
            ->create([
                'model' => 'Post',
                'action' => 'Created'
            ]);
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param   Post $post
     * @return  void
     */
    public function updated(Post $post)
    {
        CrudAction::query()
            ->create([
                'model' => 'Post',
                'action' => 'Updated'
            ]);
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param   Post $post
     * @return  void
     */
    public function deleted(Post $post)
    {
        CrudAction::query()
            ->create([
                'model' => 'Post',
                'action' => 'Deleted'
            ]);
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param   Post $post
     * @return  void
     */
    public function restored(Post $post)
    {
        CrudAction::query()
            ->create([
                'model' => 'Post',
                'action' => 'Restored'
            ]);
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param   Post $post
     * @return  void
     */
    public function forceDeleted(Post $post)
    {
        CrudAction::query()
            ->create([
                'model' => 'Post',
                'action' => 'Force Deleted'
            ]);
    }
}
