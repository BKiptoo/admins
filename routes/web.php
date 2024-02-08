<?php

use App\Livewire\Auth\Forgot;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Reset;
use App\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Admin\Login as AdminLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and will be assigned to the
| "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('login', Login::class)->name('login');
Route::get('forgot', Forgot::class)->name('forgot');
Route::post('forgot', Forgot::class)->name('forgot.post'); // Handle forgot password form submission
Route::get('register', Register::class)->name('register');
Route::get('reset/{token}', Reset::class)->name('reset');
Route::get('verify/{slug}', Verify::class)->name('verify');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Authentication Routes
    Route::get('login', AdminLogin::class)->name('admin.login');
});
