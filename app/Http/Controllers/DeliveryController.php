<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //
    function index()
    {
        return view('customer.cart.delivery');
    }
}
