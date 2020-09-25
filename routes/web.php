<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

auth()->guard('web')->loginUsingId(3);
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
});

Route::get('/reports', function () {
    return 'the secret reports';
})->middleware('can:view_reports');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
