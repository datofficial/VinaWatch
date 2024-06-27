@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Chỉnh sửa Thành phố</h1>
    <form action="{{ route('cities.update', $city->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NameCity">Tên Thành phố</label>
            <input type="text" class="form-control" id="NameCity" name="NameCity" value="{{ $city->NameCity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('cities.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
