<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Rents;

use App\Http\Livewire\Cars;
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

Route::get('rents', Rents::class);
Route::get('cars', Cars::class)->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/aboutus', function () {
        return view('aboutus');
     })->name('aboutus');

     Route::get('/contactus', function () {
        return view('contactus');
     })->name('contactus');
    
    Route::get('rents', Rents::class);
});
Route::view('/home','home')->middleware(['auth','verified']);

Route::get('redirects', 'App\Http\Controllers\HomeController@index');
