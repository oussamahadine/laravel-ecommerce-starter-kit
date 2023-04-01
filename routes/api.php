<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('auth2/register', [UserAuthController::class,'register']);
Route::post('auth2/login', [UserAuthController::class,'login']);

Route::middleware('auth:api')->prefix('v1')->group(function(){
    
});