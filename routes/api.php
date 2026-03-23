<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Http\Request;

Route::post('/register', [RegistrationController::class, 'register']);

Route::middleware(['auth:sanctum', 'role:Admin|Chairman|Teacher|Student,sanctum'])->get('/me', function (Request $request) {
    return response()->json([
        'id' => $request->user()->id,
        'name' => $request->user()->name,
        'email' => $request->user()->email,
        'role' => $request->user()->role,
    ]);
});

Route::middleware('auth:sanctum')->get('/notifications', function (Request $request) {
    return response()->json([
        'notifications' => $request->user()->notifications,
        'unread_count' => $request->user()->unreadNotifications->count(),
    ]);
});

Route::middleware('auth:sanctum')->post('/notifications/read', function (Request $request) {
    $request->user()->unreadNotifications->markAsRead();
    return response()->json(['message' => 'All notifications marked as read']);
});
