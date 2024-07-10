@extends('User.layouts.master')

@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Giỏ Hàng Của Bạn</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cart-detail">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $id => $details)
                                <tr>
                                    <td><img src="{{ asset('User/images/' . $details['image']) }}" class="img-fluid" alt="{{ $details['name'] }}" style="width: 100px;"></td>
                                    <td>{{ $details['name'] }}</td>
                                    <td>{{ $details['price'] }}đ</td>
                                    <td>
                                        <form action="{{ route('cart.update', $id) }}" method="POST">
                                            @csrf
                                            <input type="number" name="quantity" class="form-control text-center" value="{{ $details['quantity'] }}" min="1">
                                            <button type="submit" class="btn btn-secondary btn-sm">Cập nhật</button>
                                        </form>
                                    </td>
                                    <td>{{ $details['price'] * $details['quantity'] }}đ</td>
                                    <td>
                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">X</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="cart-detail">
                            <h2>Tổng số lượng</h2>
                            <ul>
                                @php
                                    $total = array_sum(array_map(fn($details) => $details['price'] * $details['quantity'], $cart));
                                @endphp
                                <li><span>Tổng phụ:</span> <span>{{ $total }}đ</span></li>
                                <li><span>Vận chuyển:</span> <span>0đ</span></li>
                                <li><span>Thuế:</span> <span>0đ</span></li>
                                <li><span>Tổng cộng:</span> <span>{{ $total }}đ</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
