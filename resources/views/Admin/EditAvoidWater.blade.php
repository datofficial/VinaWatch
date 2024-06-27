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
            <h3 class="fw-bold mb-3">Chỉnh sửa mức độ chống nước</h3>
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
                        <form method="POST" action="{{ route('avoidWaters.update', $avoidWater->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="NameAvoidWater">Tên mức độ chống nước:</label>
                                <input type="text" class="form-control" id="NameAvoidWater" name="NameAvoidWater" value="{{ old('NameAvoidWater', $avoidWater->NameAvoidWater) }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            <a href="{{ route('avoidWaters.index') }}" class="btn btn-secondary">Hủy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection