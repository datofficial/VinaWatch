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

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Chỉnh sửa nhà sản xuất</h3>
            <ul class="breadcrumbs mb-3">
               
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('manufacturers.update', $manufacturer->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="NameManufacturer">Tên nhà sản xuất:</label>
                                <input type="text" class="form-control" id="NameManufacturer" name="NameManufacturer" value="{{ old('NameManufacturer', $manufacturer->NameManufacturer) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="DescriptionManufacturer">Mô tả:</label>
                                <textarea class="form-control" id="DescriptionManufacturer" name="DescriptionManufacturer" rows="3" required>{{ old('DescriptionManufacturer', $manufacturer->DescriptionManufacturer) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            <a href="{{ route('manufacturers.index') }}" class="btn btn-secondary">Hủy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection