<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Rents;
use App\Http\Controllers\RentController;
use App\Http\Livewire\RentIndex;
use App\Http\Livewire\UsersChart;
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




Route::get('cars', Cars::class)->middleware('auth');

Route::get('/rents', RentIndex::class)->name('rents.index');

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

     Route::get('/success', function () {
        return view('success');
     })->name('success');

     Route::get('/contactus', function () {
        return view('contactus');
     })->name('contactus');
     
     Route::get('userschart', [UsersChart::class, 'index']);

     Route::get('analytics', 'App\Http\Controllers\RentController@googlePieChart');

     Route::get('/rents', RentIndex::class)->name('rents.index');

});
Route::view('/home','home')->middleware(['auth','verified']);

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::get('/show-rents', [HomeController::class, 'showRents']);

Route::get('/create-pdf', [HomeController::class, 'createPDF']);
