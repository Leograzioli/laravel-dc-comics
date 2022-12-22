<?php

use App\Http\Controllers\Admin\ComicsController;
use App\Models\comic;
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
    $comics = comic::all();
    return view('home', compact('comics'));
})->name('home');

Route::resource('comics', ComicsController::class);
