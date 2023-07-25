<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function showCart()
    {
        $identifier = auth()->user()->name;
        $cartContent = Cart::instance($identifier)->content();

        return view('customer.cart.index', compact('cartContent'));
    }

    public function deleteItem(Request $request, $rowId)
    {
        $identifier = auth()->user()->name;
        Cart::instance($identifier)->remove($rowId);
        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    public function updateQuantity(Request $request, $rowId)
    {
        $identifier = auth()->user()->name;
        Cart::instance($identifier)->update($rowId, $request->quantity);
        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    public function destroyCart()
    {
        $identifier = auth()->user()->name;
        Cart::instance($identifier)->destroy();
        return redirect()->back()->with('success', 'Cart destroyed successfully.');
    }
}
