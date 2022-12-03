<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Frontsite\SuccessPaymentController;


Route::resource('/',LandingController::class);
//Route::resource('appointment',AppointmentController::class);

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' =>[ 'auth:sanctum','verified']],
         function(){

           // Route::resource('appointment',AppointmentController::class);
          Route::resource('appointment',AppointmentController::class);
          Route::resource('payment',PaymentController::class);
         Route::get('success-payment', [SuccessPaymentController::class,'index'])->name('success-payment');
});
Route::group(['prefix' => 'backsite', 'as'=> 'backsite.', 'middleware' =>[ 'auth:sanctum','verified']],
         function(){

           Route::get('dashboard', [DashboardController::class, 'index']);
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
