@extends('Admin.index')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Chỉnh sửa phương thức thanh toán</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('paymentMethods.index') }}">Quản lý phương thức thanh toán</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('paymentMethods.update', $paymentMethod->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="NamePaymentMethod">Tên phương thức thanh toán</label>
                                <input type="text" name="NamePaymentMethod" class="form-control" id="NamePaymentMethod" value="{{ $paymentMethod->NamePaymentMethod }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                <a href="{{ route('paymentMethods.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
