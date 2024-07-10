<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('User.cart', compact('cart'));
    }

    public function add(Watch $watch)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$watch->id])) {
            $cart[$watch->id]['quantity']++;
        } else {
            $cart[$watch->id] = [
                "name" => $watch->NameWatch,
                "quantity" => 1,
                "price" => $watch->PriceWatch,
                "image" => $watch->ImageWatch
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function update(Request $request, Watch $watch)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$watch->id])) {
            $cart[$watch->id]['quantity'] = $request->quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function remove(Watch $watch)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$watch->id])) {
            unset($cart[$watch->id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
}