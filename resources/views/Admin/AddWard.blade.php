@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Thêm Xã/Phường</h1>
    <form action="{{ route('wards.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NameWard">Tên Xã/Phường</label>
            <input type="text" class="form-control" id="NameWard" name="NameWard" required>
        </div>
        <div class="form-group">
            <label for="district_id">Quận/Huyện</label>
            <select class="form-control" id="district_id" name="district_id" required>
                <option value="">Chọn quận/huyện</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->NameDistrict }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('wards.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
