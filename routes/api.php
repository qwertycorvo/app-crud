<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Http\Request;

Route::post('/register', [RegistrationController::class, 'register']);

Route::middleware(['auth:sanctum', 'role:Admin,Chairman,Teacher,Student'])->get('/me', function (Request $request) {
    return response()->json([
        'id' => $request->user()->id,
        'name' => $request->user()->name,
        'email' => $request->user()->email,
        'role' => $request->user()->role,
    ]);
});
