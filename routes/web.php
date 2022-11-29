<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;


Route::resource('/',LandingController::class);
// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' =>[ 'auth:sanctum','verified']],
         function(){

            Route::resource('appointment',AppointmentController::class);
            Route::resource('payment',PaymentController::class);
});
Route::group(['prefix' => 'backsite', 'as'=> 'backsite.', 'middleware' =>[ 'auth:sanctum','verified']],
         function(){

           return view('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
