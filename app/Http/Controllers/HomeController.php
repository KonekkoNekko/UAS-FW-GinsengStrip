<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin/adminHome');
    }

    public function customerHome()
    {
        return view('customer/landingpage2');
    }

    public function profileview()
    {
        $userdata = auth()->user();

        return view('customer.profile', compact('userdata'));
    }

    public function deleteAccount()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Perform the delete operation
        $user->delete();

        // Redirect to the home page or any other route after deleting the account
        return redirect()->route('beginning')->with('success', 'Your account has been deleted.');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
