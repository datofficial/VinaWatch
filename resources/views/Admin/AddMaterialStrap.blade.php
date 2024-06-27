@extends('Admin.index')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Thêm chất liệu dây đồng hồ</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
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
                        <form action="{{ route('materialStraps.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên chất liệu dây đồng hồ</label>
                                <input type="text" name="NameMaterialStrap" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <a href="{{ route('materialStraps.index') }}" class="btn btn-secondary">Hủy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
