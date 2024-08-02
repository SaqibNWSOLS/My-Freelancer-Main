<?php
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('conversation.{id}', function ($user, $id) {
    return $user->id === $id; // Example authorization logic
});
?>