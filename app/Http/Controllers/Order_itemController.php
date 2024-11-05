<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class Order_itemController extends Controller
{
    public function order_products($id)
    {
        $order_item = OrderItem::query()
            ->where('id', $id)
            ->first();

        $cart = Cart::query()
            ->where('id', $order_item->id)
            ->get();
        return view('stores.get_id', compact('cart'));
    }
}
