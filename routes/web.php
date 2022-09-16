<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\SpeechController;

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

// Route::get('/', function () {
//     return view('speech.index');
// })->name('home');


Route::controller(SpeechController::class)->group(function(){
    Route::get('speechs', 'index')->name('speech');
    Route::get('/', 'show')->name('home');
});

    
// botmancontroller
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

// flutterwavecontroller
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');