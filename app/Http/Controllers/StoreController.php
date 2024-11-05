<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function storename()
    {

        return view('stores.storenames');
    }

    public function storelogo(Request $request)
    {
        if ($request->has('logo')) {
            $fileName = $request->file('logo')->store('logos');
        }
        $store = new Store();
        $store->user_id = Auth::id();
        $store->name = $request->name;
        $store->logo = $fileName ?? null;
        $store->save();

        return redirect(route('stokes'));
    }
}
