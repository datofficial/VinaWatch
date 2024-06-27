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
            <h3 class="fw-bold mb-3">Thêm kích thước dây mới</h3>
            <ul class="breadcrumbs mb-3">
                
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm kích thước dây</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sizeStraps.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameSizeStrap">Tên kích thước dây</label>
                                <input type="text" name="NameSizeStrap" class="form-control" id="NameSizeStrap" value="{{ old('NameSizeStrap') }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm kích thước dây</button>
                                <a href="{{ route('sizeStraps.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection