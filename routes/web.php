<?php


use Illuminate\Support\Facades\Route;
use App;
use URL;

if (App::environment('production')) {
    URL::forceScheme('https');
}

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

Route::get('/', [App\Http\Controllers\ContactsController::class, 'index'])->name('index');
Route::post('/contact', [App\Http\Controllers\ContactsController::class, 'store'])->name('contact');
