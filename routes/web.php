<?php

use App\Livewire\Admin\AdminHome;
use App\Livewire\Auth\Forgot;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Reset;
use App\Livewire\Auth\Verify;
use App\Livewire\User\Account\UserProfile;
use App\Livewire\User\UserHome;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Admin\Login as AdminLogin;
use App\Livewire\Auth\Admin\Forgot as AdminForgot;
use App\Livewire\Auth\Admin\Reset as AdminReset;

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
Route::middleware(['guest'])->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('forgot', Forgot::class)->name('forgot');
    Route::post('forgot', Forgot::class)->name('forgot.post'); // Handle forgot password form submission
    Route::get('register', Register::class)->name('register');
    Route::get('reset/{token}', Reset::class)->name('reset');
    Route::get('verify/{slug}', Verify::class)->name('verify');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', UserHome::class)->name('home');
});

Route::group([
    'prefix' => 'account'
], function () {
    Route::get('profile', UserProfile::class)->name('user.profile');
//    Route::get('credentials', UserPassword::class)->name('user.credentials');
});
// Admin Routes
Route::prefix('admin')->group(function () {
    // Authentication Routes
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('login', AdminLogin::class)->name('admin.login');
        Route::get('forgot', AdminForgot::class)->name('admin.forgot');
        Route::get('reset/{token}', AdminReset::class)->name('admin.reset');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('home', AdminHome::class)->name('admin.home');
    });
});
