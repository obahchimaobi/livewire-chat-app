<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chats.{roomId}', function ($user, $roomId) {
    return $user->rooms()->where('room_id', $roomId)->exists();
});
