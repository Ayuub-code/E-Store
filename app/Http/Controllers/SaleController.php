<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function showrecord(Request $request)
    {
        $user = Auth::user();
        $payments = Payment::all();

        return view('stores.sales', compact('payments'));
    }
}
