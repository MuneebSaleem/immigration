<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StepsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderMailController;

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

Route::middleware(['web'])->group(function () {
    Route::prefix('{locale}')->group(function () {
        Route::get('/pardon/pardons-canada-guide/', function () {
            return view('welcome');
        });

        Route::get('/waiver/us-entry-waiver-guide/', function () {
            return view('welcomes');
        });

        Route::get('/thankyou', function () {
            return view('thankyou');
        })->name('thankyou');

        Route::resource('/test', TestController::class);
        Route::resource('/steps1', StepsController::class);
        Route::post('/send-payment', [StepsController::class, 'send_payment'])->name('step.send_payment');

        Route::post('/get_country', 'App\Http\Controllers\TestController@getcountry');
        Route::post('/send_email', 'App\Http\Controllers\TestController@send_email');
        Route::get('send-mail/{email}', [MailController::class, 'index']);
        Route::post('send-mail-order/', [\App\Http\Controllers\OrderMailController::class, 'index'])->name('order-email.send');
        Route::post('/send_data', 'App\Http\Controllers\TestController@send_data');
        Auth::routes();

        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/testing', [OrderMailController::class, 'index']);
    });

    Route::get('/', function () {
        return redirect('/en'); // Redirect to default locale
    });
});

