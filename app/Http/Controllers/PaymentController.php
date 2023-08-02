<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use App\Models\Payment;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function showtotal()
    {
        $identifier = auth()->user()->username;
        $deliveryData = request()->session()->get('deliveryData');
        $cartContent = Cart::instance($identifier)->content();
        $expedition = Expedition::where('id', $deliveryData['expedition'])->first();
        $exp = Expedition::find($expedition);
        $totalPayment = 0;
        $fee = 0;

        if ($expedition) {
            $fee = $expedition->delivery_fee;
            $totalPayment = $fee + Cart::total();
        }

        return view('customer.cart.total', compact('totalPayment', 'cartContent', 'fee', 'deliveryData', 'exp'));
    }

    public function storetotal(Request $request)
    {
        // $null = $request;
        return redirect()->to('payment');
    }
}
