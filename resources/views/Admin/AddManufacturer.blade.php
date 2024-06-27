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
            <h3 class="fw-bold mb-3">Thêm nhà sản xuất mới</h3>
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
                        <h4 class="card-title">Thêm nhà sản xuất</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('manufacturers.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameManufacturer">Tên nhà sản xuất</label>
                                <input type="text" name="NameManufacturer" class="form-control" id="NameManufacturer" value="{{ old('NameManufacturer') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="DescriptionManufacturer">Mô tả nhà sản xuất</label>
                                <textarea name="DescriptionManufacturer" class="form-control" id="DescriptionManufacturer" required>{{ old('DescriptionManufacturer') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm nhà sản xuất</button>
                                <a href="{{ route('manufacturers.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection