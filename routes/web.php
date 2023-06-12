<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// User Registration Form
Route::get('register', [AuthController::class, 'showCreatePage'])->name('showCreate.page');
Route::post('register', [AuthController::class, 'createPage'])->name('create.page');


// Show Login Form
Route::get('login', [AuthController::class, 'showLoginPage'])->name('showLogin.page');
Route::post('login', [AuthController::class, 'LoginPage'])->name('Login.page');


// Store Page
Route::get('store', [AuthController::class, 'showStorePage'])->name('store.page');






