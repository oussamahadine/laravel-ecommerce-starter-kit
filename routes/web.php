<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ForgotAndResetPasswordController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProductController;

# Web Routes

Route::middleware('guest')->group(function(){
    Route::get('/login', [StaticController::class, 'login'])->name('auth.login.get');
    Route::post('/login', [StaticController::class, 'submitLogin'])->name('auth.login.post');

    Route::get('/register', [StaticController::class, 'register'])->name('auth.register.get');
    Route::post('/register', [StaticController::class, 'submitRegister'])->name('auth.register.post');

    Route::get('/forget-password', [StaticController::class, 'forgetPasswordShowForm'])->name('password.forget.get');
    Route::post('/forget-password', [StaticController::class, 'submitForgetPasswordShowForm'])->name('password.forget.post');

    Route::get('reset-password/{token:slug}', [StaticController::class, 'resetPasswordShowForm'])->name('password.reset');
});


    Route::get('/', [StaticController::class, 'home'])->name('static.home');
    Route::get('/about', [StaticController::class, 'about'])->name('static.about');
    Route::get('/services', [StaticController::class, 'services'])->name('static.services');
    Route::get('/pricing', [StaticController::class, 'pricing'])->name('static.pricing');
    Route::get('/contact', [StaticController::class, 'contact'])->name('static.contact');



    Route::middleware(['auth'])->group(function(){
       Route::resource('product', ProductController::class);
       Route::get('/logout', [StaticController::class, 'logout'])->name('auth.logout');
    });
?>