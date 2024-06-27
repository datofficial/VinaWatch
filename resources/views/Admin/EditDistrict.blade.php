@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Chỉnh sửa Quận/Huyện</h1>
    <form action="{{ route('districts.update', $district->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NameDistrict">Tên Quận/Huyện</label>
            <input type="text" class="form-control" id="NameDistrict" name="NameDistrict" value="{{ $district->NameDistrict }}" required>
        </div>
        <div class="form-group">
            <label for="city_id">Thành phố</label>
            <select class="form-control" id="city_id" name="city_id" required>
                <option value="">Chọn thành phố</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $district->city_id == $city->id ? 'selected' : '' }}>
                        {{ $city->NameCity }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('districts.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
