@extends('Admin.index')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Quản lý phương thức thanh toán</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary">
                            <a href="{{ route('paymentMethods.create') }}" style="text-decoration: none; color: white">Thêm phương thức thanh toán</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên phương thức thanh toán</th>
                                        <th>Chỉnh sửa</th>
                                        <th>Xoá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <tr>
                                            <td>{{ $paymentMethod->id }}</td>
                                            <td>{{ $paymentMethod->NamePaymentMethod }}</td>
                                            <td>
                                                <a href="{{ route('paymentMethods.edit', $paymentMethod->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i> Chỉnh sửa
                                                </a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('paymentMethods.destroy', $paymentMethod->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá?');">
                                                        <i class="fa fa-trash"></i> Xoá
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
