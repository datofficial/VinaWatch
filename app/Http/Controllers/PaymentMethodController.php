<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return view('Admin.PaymentMethod', ['paymentMethods' => $paymentMethods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.AddPaymentMethod');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentMethodRequest $request)
    {
        $data = $request->validated();
        PaymentMethod::create($data);
        
        return redirect()->route('paymentMethods.index')->with('success', 'Phương thức thanh toán đã được thêm thành công');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        return view('Admin.EditPaymentMethod', ['paymentMethod' => $paymentMethod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod)
    {
        $data = $request->validated();
        $paymentMethod->update($data);
        
        return redirect()->route('paymentMethods.index')->with('success', 'Phương thức thanh toán đã được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();
        return redirect()->route('paymentMethods.index')->with('success', 'Phương thức thanh toán đã được xoá thành công');
    }
}
