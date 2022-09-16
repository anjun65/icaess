<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/technical-program-committe', function () {
    return view('committes');
})->name('technical');

Route::get('/local-committes', function () {
    return view('local-committes');
})->name('local');

Route::get('/accepted-paper', function () {
    return view('accepted-paper');
})->name('paper');

Route::get('/virtual-conference', function () {
    return view('virtual-conference');
})->name('conference');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    'admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin');
    })->name('admin');
});