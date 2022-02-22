<?php

namespace App\Observers;

use App\Models\CrudAction;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param   User $user
     * @return  void
     */
    public function created(User $user)
    {
        CrudAction::query()
            ->create([
                'model' => 'User',
                'action' => 'Created'
            ]);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param   User $user
     * @return  void
     */
    public function updated(User $user)
    {
        CrudAction::query()
            ->create([
                'model' => 'User',
                'action' => 'Updated'
            ]);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param   User $user
     * @return  void
     */
    public function deleted(User $user)
    {
        CrudAction::query()
            ->create([
                'model' => 'User',
                'action' => 'Deleted'
            ]);
    }

    /**
     * Handle the User "restored" event.
     *
     * @param   User $user
     * @return  void
     */
    public function restored(User $user)
    {
        CrudAction::query()
            ->create([
                'model' => 'User',
                'action' => 'Restored'
            ]);
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param   User $user
     * @return  void
     */
    public function forceDeleted(User $user)
    {
        CrudAction::query()
            ->create([
                'model' => 'User',
                'action' => 'Force Deleted'
            ]);
    }
}
