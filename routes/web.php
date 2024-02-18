<?php

use App\Livewire\Admin\AdminHome;
use App\Livewire\Auth\Forgot;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Reset;
use App\Livewire\Auth\Verify;
use App\Livewire\User\Account\UserProfile;
use App\Livewire\User\Blog\Add;
use App\Livewire\User\Blog\ListBlog;
use App\Livewire\User\Pages\Members;
use App\Livewire\User\Slide\AddSlide;
use App\Livewire\User\UserHome;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Admin\AdminLogin as AdminLogin;
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
    Route::get('user.home', UserHome::class)->name('user.home');
    Route::get('/members', Members::class)->name('user.members');
    Route::get('/add', Add::class)->name('user.add');
    Route::post('/store', [Add::class, 'store'])->name('blog.store'); // Route for storing blog data
    Route::get('/listblog', ListBlog::class)->name('user.listblog');
    Route::get('/addslide',AddSlide::class)->name('user.slide.add');
    Route::prefix('account')->group(function () {
        Route::get('profile', UserProfile::class)->name('user.profile');
        // Route::get('credentials', UserPassword::class)->name('user.credentials');
    });
});

// Admin Routes
Route::prefix('admin')->group(function () {
    // Guest routes
    Route::get('login', AdminLogin::class)->name('admin.login');
    Route::get('forgot', AdminForgot::class)->name('admin.forgot');
    Route::get('reset/{token}', AdminReset::class)->name('admin.reset');

    // Authenticated routes
    Route::middleware(['auth'])->group(function () {
        Route::get('home', AdminHome::class)->name('admin.home');
    });
});
