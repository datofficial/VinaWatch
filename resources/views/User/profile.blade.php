@extends('User.layouts.master')

@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Thông Tin Khách Hàng</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="profile-detail">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Họ và tên</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Họ và tên" value="Nguyễn Văn A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Email" value="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" value="0123456789">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address" placeholder="Địa chỉ" value="123 Đường ABC, Quận 1, TP.HCM">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="profile-orders mt-5">
                    <h3>Lịch sử đơn hàng</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Tổng cộng</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1234</td>
                                <td>01/01/2024</td>
                                <td>$1000</td>
                                <td>Đã giao</td>
                            </tr>
                            <tr>
                                <td>#1235</td>
                                <td>02/02/2024</td>
                                <td>$2000</td>
                                <td>Đang xử lý</td>
                            </tr>
                            <!-- Add more orders as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection