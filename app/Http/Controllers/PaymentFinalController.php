<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentFinalController extends Controller
{
    //
    public function show()
    {
        $paymentBank = Payment::all();
        return view('customer.cart.payment', compact('paymentBank'));
    }

    public function store(Request $request)
    {
        $file = $request->file('paytotal');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // Store File
            $file->store('public/payproof');
        } else {
            # code... if file is null send warning message on view payment.payment
        }


        $transaksi = new Transaction;
        if ($file != null) {
            $transaksi->original_filename = $originalFilename;
            $transaksi->encrypted_filename = $encryptedFilename;
        }

        $transaksi->save();

        return redirect()->route('cart.show');
    }
}
