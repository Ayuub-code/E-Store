<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function sales(Request $request)
    {
        $store  = Store::query()
            ->where('id', $request->id)
            ->first();
        return view('stores.items', [
            'store' => $store
        ]);
    }
    public function items(Request $request)
    {
        if ($request->has('cover_image')) {
            $FileName = $request->file('cover_image')->store('cover_images');
        }
        $product = new Product();
        $product->store_id = $request->store_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->cover_image = $FileName ?? null;
        $product->save();
        return redirect(route('display_store'));
    }
    public function display_product()
    {
        $products = Product::all();
        $products = Product::paginate(8);
        return view('stores.products', compact('products'));
    }
    public function Searched(Request $request)
    {
        $query = $request->input('query');
        $products = Product::query()
            ->where('name', 'like', "%$query%")
            ->paginate(5);
        return view('stores.search', compact('products'));
    }
}
