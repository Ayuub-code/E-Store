<?php

namespace App\Http\Controllers;

use App\Http\Clients\PaystackClient;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct(
        public readonly PaystackClient $paystackClient
    ) {}

    public function payment()
    {
        $user = Auth::user();

        $cart = Cart::query()
            ->where('user_id', $user->id)
            ->first();

        return view('stores.payment', [
            'cart' => $cart
        ]);
    }

    public function initializePayment()
    {
        $user = Auth::user();

        $cart = Cart::query()
            ->where('user_id', $user->id)
            ->with(['cartItems' => fn($query) => with('product')])
            ->first();
        $items = $cart->cartItems;

        $totalPrice = 0;

        foreach ($items as $item) {
            $totalPrice += (float) $item->product->price * (float) $item->quantity;
        }

        $response = $this->paystackClient->initialize($user->email, $totalPrice, $cart->id);

        if ($response['status'] === true) {
            return redirect($response['data']['authorization_url']);
        }
    }

    public function verifyPayment(Request $request)
    {
        $reference = $request->reference ?? null;
        if ($reference) {
            $response = $this->paystackClient->verifyTransaction($reference);
            if ($response !== null && $response['status'] === true && $response['data']['status'] === 'success') {
                $user = Auth::user();

                $cart = Cart::query()
                    ->where('user_id', $user->id)
                    ->with(['cartItems' => fn($query) => with('product')])
                    ->first();
                $items = $cart->cartItems;
                $totalPrice = 0;
                foreach ($items as $item) {
                    $totalPrice += (float) $item->product->price * (float) $item->quantity;

                    $order = Order::query()
                        ->where('user_id', $user->id)
                        ->first();

                    $payment = Payment::query()
                        ->where('user_id', $request->id)
                        ->first();

                    $user = Auth::user();

                    $payment = new Payment();
                    $payment->user_id = $user->id;
                    $payment->cart_id = $cart->id;
                    $payment->order_id = $order->id;
                    $payment->totalPrice = $response['data']['amount'];
                    $payment->status = $response['data']['status'];
                    $payment->save();



                    return view('stores.reference', [
                        'reference' => $reference,
                        'cart' => $cart,
                        'user' => $user,
                        'order' => $order,
                        'totalPrice' => $totalPrice,
                    ]);
                }
                return redirect(route('display_products'));
            }
        }
    }
}
