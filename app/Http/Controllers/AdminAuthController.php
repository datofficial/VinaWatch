<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Login.Admin.Login');
    }

     public function login(Request $request)
     {
        $credentials = [
            'EmailUser' => $request->input('EmailUser'),
            'PasswordUser' => $request->input('PasswordUser'),
        ];
        if (Auth::attempt(['email' => $credentials['EmailUser'], 'password' => $credentials['PasswordUser']]) || Auth::check()) {
            return Redirect::route("dashboard");
        } else {
            return Redirect::route("login");
        }
     }

    public function showRegistrationForm()
    {
        $cities = City::all();
        $districts = District::all();
        $wards = Ward::all();
        return view('Login.Admin.Register', compact('cities', 'districts', 'wards'));
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->NameUser,
            'password' => Hash::make($request->PasswordUser),
            'PhoneUser' => $request->PhoneUser,
            'EmailUser' => $request->EmailUser,
            'DOBUser' => $request->DOBUser,
            'RoleUser' => $request->RoleUser,
            'IDCity' => $request->IDCity,
            'IDDistrict' => $request->IDDistrict,
            'IDWard' => $request->IDWard,
            'Address' => $request->Address,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function logout(){
        Auth::logout();
        return Redirect::route("index");
    }
}
