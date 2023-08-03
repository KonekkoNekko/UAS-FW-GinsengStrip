<?php

namespace App\Http\Controllers;

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
        return view('admin.transaction.index', compact('transactions'));
    }
    public function getData(Request $request)
    {
        $transactions = Transaction::with(['payment', 'expedition', 'payStatus']);


        if ($request->ajax()) {
            return datatables()->of($transactions)->addIndexColumn()->addColumn('actions', function ($transactions) {
                return view('admin.productadms.action', compact('transactions'));
            })->toJson();
        }
    }
}
