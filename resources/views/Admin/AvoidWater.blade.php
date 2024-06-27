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
            <h3 class="fw-bold mb-3">Quản lý mức độ chống nước</h3>
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
                            <a href="{{ route('avoidWaters.create') }}" style="text-decoration: none; color: white">Thêm mức độ chống nước</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">ID</th>
                                        <th style="text-align: center;">Tên mức độ chống nước</th>
                                        <th style="text-align: center;">Chỉnh sửa</th>
                                        <th style="text-align: center;">Xoá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($avoidWaters as $avoidWater)
                                        <tr>
                                            <td style="text-align: center;">{{ $avoidWater->id }}</td>
                                            <td style="text-align: center;">{{ $avoidWater->NameAvoidWater }}</td>
                                            <td style="text-align: center;">
                                                <a href="{{ route('avoidWaters.edit', $avoidWater->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i> Chỉnh sửa
                                                </a>
                                            </td>
                                            <td style="text-align: center;">
                                                <form method="POST" action="{{ route('avoidWaters.destroy', $avoidWater) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá?');">
                                                        <i class="fa fa-trash" aria-hidden="true"></i> Xoá
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