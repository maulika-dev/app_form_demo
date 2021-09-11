<?php

use Illuminate\Support\Facades\Route;

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
    return view('application-form.create');
});

Route::get('/demo', function () {
    return view('demo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/applicant/destroy/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');

Route::get('/applicant/{id}/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
