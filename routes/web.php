<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InboxController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('backend.layouts.app');
})->name('home');

Route::get('/inbox', [InboxController::class, 'inbox'])->name('inbox');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
