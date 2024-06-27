@extends('Admin.index')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Thêm kích cỡ mặt kính mới</h3>
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
                        <h4 class="card-title">Thêm kích cỡ mặt kính</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sizeGlasses.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameSizeGlass">Tên kích cỡ mặt kính</label>
                                <input type="text" name="NameSizeGlass" class="form-control" id="NameSizeGlass" value="{{ old('NameSizeGlass') }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm kích cỡ mặt kính</button>
                                <a href="{{ route('sizeGlasses.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
