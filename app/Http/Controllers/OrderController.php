<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function makeOrder(Request $request)
    {
        $user = Auth::user();
        $order = Order::query()
            ->where('user_id', $request->id)
            ->first();

        $cart = Cart::query()
            ->where('user_id', $user->id)
            ->with(['cartItems' => fn($query) => with('product')])
            ->first();
        $items = $cart->cartItems;

        $totalPrice = 0;


        foreach ($items as $item) {
            info(json_encode($item->product));
            info($item->quantity);
            $totalPrice += (float) $item->product->price * (float) $item->quantity;
        }

        $user = Auth::user();
        $order = new Order();
        $order->user_id = $user->id;
        $order->save();

        return view('stores.order', compact('items'), [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'paymentResponse' => null
        ]);
    }
}
