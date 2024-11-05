<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public function cartItems(Request $request)
    // {
    //     $product = Product::query()
    //         ->where('id', $request->id)
    //         ->get();
    //     return view('stores.cart', [
    //         'products' => $product
    //     ]);
    // }
    public function addToCart(Request $request)
    {
        $user = Auth::user();

        $cart = Cart::query()
            ->updateOrCreate(
                ['user_id' => $user->id]
            );

        $item = CartItem::query()
            ->where([
                'cart_id' => $cart->id,
                'user_id' => $user->id,
                'product_id' => $request->id
            ])
            ->first();

        $quantity = $item !== null ? $item->quantity + ($request->quantity ?? 1) : ($request->quantity ?? 1);

        $item = CartItem::query()
            ->updateOrCreate(
                [
                    'cart_id' => $cart->id,
                    'user_id' => $user->id,
                    'product_id' => $request->id
                ],
                ['quantity' => $quantity]
            );


        return redirect()->back();
    }

    public function viewcart()
    {
        $user = Auth::user();

        $cart = Cart::query()
            ->where('user_id', $user->id)
            ->with(['cartItems' => fn($query) => $query->with('product')])
            ->first();


        $items = $cart->cartItems;


        // dd($items);

        return view('stores.viewcart', compact('items'), [
            'cart' => $cart

        ]);
    }
}
