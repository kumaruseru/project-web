<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\MyAccountController;

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('/login/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('login.provider');
Route::get('/login/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
Route::get('/dashboard', function () {
    return redirect('/')->with('success', 'Login successful.');
})->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/customer', function () {
    return view('customer.Customer');
})->name('customer.index');
Route::get('/my-account', [MyAccountController::class, 'index'])->name('my-account');
Route::post('/my-account', [MyAccountController::class, 'store'])->name('my-account.store');
Route::post('/my-account/save', [MyAccountController::class, 'save'])->name('my-account.save');
Route::get('/bag', function () {
    return view('customer.Bag');
})->name('bag');
