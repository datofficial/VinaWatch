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
                            <tr>
                                <td><img src="{{ asset('User/images/Rolex COSMOGRAPH DAYTONA.png') }}" class="img-fluid" alt="Rolex COSMOGRAPH DAYTONA" style="width: 100px;"></td>
                                <td>Rolex COSMOGRAPH DAYTONA</td>
                                <td>$65,000.00</td>
                                <td><input type="number" name="quantity" class="form-control text-center" value="1"></td>
                                <td>$65,000.00</td>
                                <td><a href="#" class="btn btn-danger btn-sm">X</a></td>
                            </tr>
                            <!-- Add more product rows as needed -->
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="cart-detail">
                            <h2>Tổng số lượng</h2>
                            <ul>
                                <li><span>Tổng phụ:</span> <span>$65,000.00</span></li>
                                <li><span>Vận chuyển:</span> <span>$0.00</span></li>
                                <li><span>Thuế:</span> <span>$0.00</span></li>
                                <li><span>Tổng cộng:</span> <span>$65,000.00</span></li>
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