<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatController;
Route::prefix('api')->group(function () {
    Route::get('/conversations', [ChatController::class, 'getConversations']);
    Route::get('/conversations/{id}/messages', [ChatController::class, 'getMessages']);
    Route::post('/messages', [ChatController::class, 'sendMessage']);
    Route::get('/user', [ChatController::class, 'getUser']);
});
