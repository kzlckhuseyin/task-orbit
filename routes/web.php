<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\Auth\GithubController;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

//GitHub
Route::get('/auth/github', [GithubController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/github/callback', [GithubController::class, 'callback'])->name('github.callback');

require __DIR__.'/settings.php';


Route::get('/', function () {
    return view('welcome');
})->name('home');


// ... diğer rotalar

Route::get('/admin', function () {
    return view('admin-login');
})->name('admin.login');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

/*

Route::get('/admin-login', function () {
    return view('login');
});
*/

// 2. Admin Ana Paneli / Dashboard (admin.blade.php)
// "Hoşgeldiniz Admin" yazan sayfa
Route::get('/admin', function () {
    return view('admin');
})->name('admin.dashboard');

// 3. Admin Aksiyon Paneli (admin_action_panel.blade.php)
Route::get('/admin-action-panel', function () {
    return view('admin_action_panel');
})->name('admin.actions');

// 4. Şirketler Listesi (companies.blade.php)
Route::get('/companies', function () {
    return view('companies');
})->name('companies.view');


// dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//user_panel
Route::get('/user-panel', function () {
    return view('user_panel');
});
