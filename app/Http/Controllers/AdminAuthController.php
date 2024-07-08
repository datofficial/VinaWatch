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
        $account = $request->only(['email', 'password']);
        $admin_name = $request->email;
        $role = user:: where('EmailUser', $admin_name)->value('RoleUser');
        dd($role);
        if(Auth::guard('admin')->attempt($account)){
            $accountadmin = Auth::guard('admin')->user();
            Auth::login($accountadmin);
            session(['admin' => $accountadmin]);
            return Redirect::route('drink.index');
        }else{
           return Redirect::route('dashboard');
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
            'NameUser' => $request->NameUser,
            'PasswordUser' => Hash::make($request->PasswordUser),
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
}
