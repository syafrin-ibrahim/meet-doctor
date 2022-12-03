<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessPaymentController extends Controller
{
    public function index()
    {
       // return view('pages.frontsite.appointment.index');
        return view('pages.frontsite.success.success-payment');
    }
}
