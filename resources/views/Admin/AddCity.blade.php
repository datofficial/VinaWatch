@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Thêm Thành phố</h1>
    <form action="{{ route('cities.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NameCity">Tên Thành phố</label>
            <input type="text" class="form-control" id="NameCity" name="NameCity" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('cities.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
