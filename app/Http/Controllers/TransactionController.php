<?php

namespace App\Http\Controllers;

use App\Models\PayStatus;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index ()
    {
        $transactions = Transaction::all();
        return view('admin.transaction.index', compact('transactions'));
    }

    public function edit ($id)
    {
        $transaction = Transaction::find($id);
        $statuses = PayStatus::all();

        return view('admin.transaction.edit', compact('transaction', 'statuses'));
    }

    public function update($id){
        $transaction = Transaction::find($id);
        $transaction->pay_statuses_id = request('statustransc');
        $transaction->save();
        return redirect()->back();
    }

    public function destroy($id){
        Transaction::find($id)->delete();
        return redirect()->route('transc.index');
    }
}
