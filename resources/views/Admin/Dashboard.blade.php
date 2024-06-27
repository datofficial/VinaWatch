@extends('Admin.index')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div class="row">
        <!-- Thẻ thống kê -->
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Người dùng</div>
                <div class="card-body">
                    <h5 class="card-title">1000</h5>
                    <p class="card-text">Tổng số người dùng</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Đơn hàng</div>
                <div class="card-body">
                    <h5 class="card-title">500</h5>
                    <p class="card-text">Tổng số đơn hàng</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Sản phẩm</div>
                <div class="card-body">
                    <h5 class="card-title">200</h5>
                    <p class="card-text">Tổng số sản phẩm</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Báo cáo</div>
                <div class="card-body">
                    <h5 class="card-title">50</h5>
                    <p class="card-text">Tổng số báo cáo</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng dữ liệu -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bảng dữ liệu</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Vai trò</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dữ liệu giả -->
                            <tr>
                                <th>1</th>
                                <td>Nguyễn Văn A</td>
                                <td>nguyenvana@example.com</td>
                                <td>Admin</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Chỉnh sửa</a>
                                    <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                            <!-- Thêm các hàng dữ liệu khác ở đây -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
