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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/timetable', \App\Http\Livewire\CreateTimeTable::class)->name('timetable.get');
Route::get('/subject', \App\Http\Livewire\Subject::class)->name('subjects');
Route::get('/teacher', \App\Http\Livewire\Teacher::class)->name('teachers');
Route::get('/class', \App\Http\Livewire\Classes::class)->name('classes');
Route::get('/view', \App\Http\Livewire\View::class)->name('view');
