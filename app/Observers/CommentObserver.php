<?php

namespace App\Observers;

use App\Models\Comment;
use App\Models\CrudAction;

class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     *
     * @param   Comment $comment
     * @return  void
     */
    public function created(Comment $comment)
    {
        CrudAction::query()
            ->create([
                'model' => 'Comment',
                'action' => 'Created'
            ]);
    }

    /**
     * Handle the Comment "updated" event.
     *
     * @param   Comment $comment
     * @return  void
     */
    public function updated(Comment $comment)
    {
        CrudAction::query()
            ->create([
                'model' => 'Comment',
                'action' => 'Updated'
            ]);
    }

    /**
     * Handle the Comment "deleted" event.
     *
     * @param   Comment $comment
     * @return  void
     */
    public function deleted(Comment $comment)
    {
        CrudAction::query()
            ->create([
                'model' => 'Comment',
                'action' => 'Deleted'
            ]);
    }

    /**
     * Handle the Comment "restored" event.
     *
     * @param   Comment $comment
     * @return  void
     */
    public function restored(Comment $comment)
    {
        CrudAction::query()
            ->create([
                'model' => 'Comment',
                'action' => 'Restored'
            ]);
    }

    /**
     * Handle the Comment "force deleted" event.
     *
     * @param   Comment $comment
     * @return  void
     */
    public function forceDeleted(Comment $comment)
    {
        CrudAction::query()
            ->create([
                'model' => 'Comment',
                'action' => 'Force Deleted'
            ]);
    }
}
