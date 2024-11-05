<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function registrationForm()
    {
        return view('stores.userReg');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->save();

        return redirect(route('loginpage'));
    }

    public function login()
    {
        return view('stores.userlogin');
    }

    public function loginhome(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $user = User::query()
            ->where('email', $request->email)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

            if ($login) {
                return redirect(route('display_products'));
            }
            // return redirect(route('Maxrite_dashBoard'));
            // }
        }
        return redirect()->back();
    }
    public function Maxrite_user(Request $request)
    {
        $users = User::all();
        return view('stores.maxrite_user', compact('users'));
    }
    public function Update_user(Request $request)
    {
        $user = Auth::user();

        $user = User::query()
            ->where('id', $request->id)
            ->update([
                'role' => 'admin',
            ]);
        return redirect()->back();
    }
}
