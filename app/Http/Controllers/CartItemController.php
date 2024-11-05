<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CartItemController extends Controller
{
    public function ViewItem()
    {
        $user = Auth::user();

        $cartitems = CartItem::query()
            ->where('user_id', $user->id)
            ->with('products')
            ->get();

        return view('stores.viewitems', compact('cartitems'));
    }
    public function Removeitems($item)
    {
        // $item = CartItem::find('id');
        // $item->delete();

        $item = CartItem::query()
            ->where('product_id', $item)
            ->delete();

        return redirect()->back();
    }
}
