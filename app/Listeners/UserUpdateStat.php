<?php

namespace App\Listeners;

use App\Events\UserLogin;
use App\Models\Stat;

class UserUpdateStat
{
    /**
     * Handle the event.
     *
     * @param \App\Events\UserLogin $event
     * @return void
     */
    public function handle(UserLogin $event): void
    {
        Stat::insertIgnore([
            'user_id' => $event->user->id,
            'visit_date' => now()->toDateString(),
        ]);

        $event->user->updated_at = now();
        $event->user->save();
    }
}
