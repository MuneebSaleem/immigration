<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StepsController;

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
    return view('welcome');
});


Route::resource('/test', TestController::class);
Route::resource('/steps1', StepsController::class);
Route::post('/get_country', 'App\Http\Controllers\TestController@getcountry');
Route::post('/send_email', 'App\Http\Controllers\TestController@send_email');
Route::get('send-mail/{email}', [MailController::class, 'index']);

Route::post('/send_data', 'App\Http\Controllers\TestController@send_data');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
