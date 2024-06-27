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
            <h3 class="fw-bold mb-3">Thêm mức độ chống nước mới</h3>
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
                        <h4 class="card-title">Thêm mức độ chống nước</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('avoidWaters.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameAvoidWater">Tên mức độ chống nước</label>
                                <input type="text" name="NameAvoidWater" class="form-control" id="NameAvoidWater" value="{{ old('NameAvoidWater') }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm mức độ chống nước</button>
                                <a href="{{ route('avoidWaters.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection