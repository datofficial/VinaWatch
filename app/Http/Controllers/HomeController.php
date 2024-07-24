<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\Manufacturer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
   public function home() {
        $watches = Watch::all();
        return view ('User.index', [
            "watches" => $watches
        ]);
   }

   public function watchDetail(Request $request) {
    
    $watches = Watch::where('id', $request->id)->get();
    return view ('User.detailwatch', [
        "watches" => $watches
    ]);
}


    
}