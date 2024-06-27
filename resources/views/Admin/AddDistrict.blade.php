@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Thêm Quận/Huyện</h1>
    <form action="{{ route('districts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NameDistrict">Tên Quận/Huyện</label>
            <input type="text" class="form-control" id="NameDistrict" name="NameDistrict" required>
        </div>
        <div class="form-group">
            <label for="city_id">Thành phố</label>
            <select class="form-control" id="city_id" name="city_id" required>
                <option value="">Chọn thành phố</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->NameCity }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('districts.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
