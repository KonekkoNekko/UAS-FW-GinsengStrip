<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use App\Models\Payment;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function showtotal()
    {
        $paymentBank = Payment::all();
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

        return view('customer.cart.total', compact('totalPayment', 'cartContent', 'fee', 'deliveryData', 'exp', 'paymentBank'));
    }

    public function storetotal(Request $request)
    {


        // Get the authenticated user
        $user = Auth::user();

        // Get the delivery data from the session
        $deliveryData = $request->session()->get('deliveryData');

        // Get the cart content from the user's cart
        $identifier = $user->username;
        $cartContent = Cart::instance($identifier)->content();

        $expedition = Expedition::where('id', $deliveryData['expedition'])->first();
        $totalPayment = 0;
        $fee = 0;

        if ($expedition) {
            $fee = $expedition->delivery_fee;
            $totalPayment = $fee + Cart::total();
        }
        // Get File
        $file = $request->file('payfile');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            //Store File
            $file->store('public/payproof');
        }

        $transaction = new Transaction();
        $transaction->cust_name = $user->name;
        $transaction->cart = $cartContent;
        $transaction->total_transaction = $totalPayment;
        $transaction->payment_method = $request->methodpay;
        $transaction->payments_id = $request->payment;
        $transaction->address = $deliveryData['address'];
        $transaction->coordinate = $deliveryData['coordinate'];
        $transaction->expeditions_id = $deliveryData['expedition'];
        $transaction->pay_statuses_id = 1;
        if ($file != null) {
            $transaction->original_filename = $originalFilename;
            $transaction->encrypted_filename = $encryptedFilename;
        }

        $transaction->save();
        // // Prepare the data to be stored in the database
        // $data = [
        //     'cust_name' => $user->name,
        //     'cart' => $cartContent,
        //     'total_transaction' => $this->totalPayment,
        //     'payment_method' => $request->input('methodpay'),
        //     'payments_id' => $request->input('payment'), // Assuming you have a field in your form with name="payment"
        //     'original_filename' => '',
        //     'encrypted_filename' => '',
        //     'address' => $deliveryData['address'], // Get address from the session
        //     'coordinate' => $deliveryData['coordinate'], // Get coordinate from the session
        //     'expeditions_id' => $deliveryData['expedition'],
        //     'pay_statuses_id' => 1, // Assuming the pay_statuses_id should be set to 1, change it accordingly
        // ];

        // $file = $request->file('payfile');
        // if ($file != null) {
        //     $originalFilename = $file->getClientOriginalName();
        //     $encryptedFilename = $file->hashName();

        //     //Store File
        //     $file->store('public/payproof');

        //     // Update the values in the $data array
        //     $data['original_filename'] = $originalFilename;
        //     $data['encrypted_filename'] = $encryptedFilename;
        // }

        // // Store the data into the database
        // Transaction::create($data);
        Cart::instance($identifier)->destroy();
        $request->session()->forget('deliveryData');

        // Redirect to the cart show route or any other route as needed
        return redirect()->route('cart.show');
    }
}
