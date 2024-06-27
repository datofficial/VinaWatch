<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Hiển thị trang Dashboard.
     */
    public function index()
    {
        return view('Admin.dashboard');
    }
}
