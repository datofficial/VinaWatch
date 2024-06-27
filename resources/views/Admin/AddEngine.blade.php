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
            <h3 class="fw-bold mb-3">Thêm động cơ mới</h3>
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
                        <h4 class="card-title">Thêm động cơ</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('engines.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameEngine">Tên động cơ</label>
                                <input type="text" name="NameEngine" class="form-control" id="NameEngine" value="{{ old('NameEngine') }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm động cơ</button>
                                <a href="{{ route('engines.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
