<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\SuccessPaymentController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\DoctorController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\ConfigPaymentController;
use App\Http\Controllers\Backsite\HospitalPatientController;
use App\Http\Controllers\Backsite\ReportAppointmentController;
use App\Http\Controllers\Backsite\ReportTransactionController;
use App\Http\Controllers\Backsite\PermissionController;



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

           Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
           Route::resource('type-user', DashboardController::class);
           Route::resource('specialist', SpecialistController::class);
           Route::resource('doctor', DoctorController::class);
           Route::resource('config-payment', ConfigPaymentController::class);
           Route::resource('role', RoleController::class);
           Route::resource('appointment', ReportAppointmentController::class);
           Route::resource('transaction', ReportTransactionController::class);
           Route::resource('hospital-patient', ReportTransactionController::class);
           Route::get('permission', [PermissionController::class, 'show'])->name('permission');
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
