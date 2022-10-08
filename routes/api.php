<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\generalRequests;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('testimonials', TestimonialController::class);
});



Route::post('auth/login', [AuthController::class, 'login']);
Route::get('general/recentRequests', [generalRequests::class, 'recentRequests']);
