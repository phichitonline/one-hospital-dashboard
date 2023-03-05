<?php

use App\Http\Livewire\SearchUsers;
use App\Http\Livewire\Stat\StatEr;
use App\Http\Livewire\Stat\StatIpd;
use App\Http\Livewire\Stat\StatOpd;
use App\Http\Livewire\Reports\Index;
use App\Http\Livewire\Stat\StatDent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Dashboard\DashboardIpd;
use App\Http\Livewire\Dashboard\DashboardOpd;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/searchuser', SearchUsers::class)->name('searchuser');

Route::get('/', Dashboard::class)->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/report', Index::class)->name('report');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/opd', DashboardOpd::class)->name('dashboard.opd');
    Route::get('/ipd', DashboardIpd::class)->name('dashboard.ipd');
});

Route::prefix('stat')->group(function () {
    Route::get('/opd', StatOpd::class)->name('stat.opd');
    Route::get('/ipd', StatIpd::class)->name('stat.ipd');
    Route::get('/er', StatEr::class)->name('stat.er');
    Route::get('/dent', StatDent::class)->name('stat.dent');
});


