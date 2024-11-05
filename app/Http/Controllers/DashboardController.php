<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function dashboard()
    // {
    //     return view('stores.home');
    // }
    // public function admin_dashboard()
    // {
    //     return view('stores.admin_correction');
    // }
    public function maxrite_store()
    {
        $stores = Store::all();
        return view('stores.return_store', compact('stores'));
    }
    public function maxrite_cart()
    {
        $carts = Cart::all();
        return view('stores.return_cart', compact('carts'));
    }
    public function maxrite_order()
    {
        $orders = Order::all();
        return view('stores.return_order', compact('orders'));
    }
    public function maxrite_cartitems()
    {
        $cartitems = CartItem::all();
        return view('stores.return_cartitems', compact('cartitems'));
    }
    public function maxrite_products()
    {
        $products = Product::all();
        return view('stores.return_products', compact('products'));
    }

    public function adminDashboard()
    {
        return view('dashboard');
    }
}
