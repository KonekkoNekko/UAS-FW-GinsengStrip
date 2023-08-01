<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //
    function index()
    {
        $expeditions = Expedition::all();
        return view('customer.cart.delivery', compact('expeditions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiverName' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'coordinate' => 'required',
            'expedition' => 'required',
        ]);


        // Store the form data in the session
        $deliveryData = [
            'receiverName' => $request->input('receiverName'),
            'address' => $request->input('address'),
            'coordinate' => $request->input('coordinate'),
            'expedition' => $request->input('expedition'),
        ];

        $request->session()->put('deliveryData', $deliveryData);

        // Redirect to the payment route
        return redirect()->route('payment.index_total');
    }
}
