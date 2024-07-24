@extends('Login.Admin.layout')

@section('title', 'Đăng Ký')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <!-- Tên Người dùng -->
    <div class="form-group">
        <label for="NameUser">Tên Người dùng</label>
        <input type="text" class="form-control" id="NameUser" name="NameUser" required>
    </div>

    <!-- Mật khẩu -->
    <div class="form-group">
        <label for="PasswordUser">Mật khẩu</label>
        <input type="password" class="form-control" id="PasswordUser" name="PasswordUser" required>
    </div>

    <!-- Số điện thoại -->
    <div class="form-group">
        <label for="PhoneUser">Số điện thoại</label>
        <input type="text" class="form-control" id="PhoneUser" name="PhoneUser" required>
        @if ($errors->has('PhoneUser'))
            <span class="text-danger">{{ $errors->first('PhoneUser') }}</span>
        @endif
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="EmailUser">Email</label>
        <input type="email" class="form-control" id="EmailUser" name="EmailUser" required>
        @if ($errors->has('EmailUser'))
            <span class="text-danger">{{ $errors->first('EmailUser') }}</span>
        @endif
    </div>

    <!-- Ngày sinh -->
    <div class="form-group">
        <label for="DOBUser">Ngày sinh</label>
        <input type="date" class="form-control date-input" id="DOBUser" name="DOBUser" required>
    </div>

    <!-- Thành phố -->
    <div class="form-group">
        <label for="IDCity">Thành phố</label>
        <select class="form-control" id="IDCity" name="IDCity" required>
            <option value="">Chọn thành phố</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->NameCity }}</option>
            @endforeach
        </select>
    </div>

    <!-- Quận/Huyện -->
    <div class="form-group">
        <label for="IDDistrict">Quận/Huyện</label>
        <select class="form-control" id="IDDistrict" name="IDDistrict" required>
            <option value="">Chọn quận/huyện</option>
            @foreach ($cities as $city)
                @foreach ($city->districts as $district)
                    <option value="{{ $district->id }}" data-city-id="{{ $city->id }}">{{ $district->NameDistrict }}</option>
                @endforeach
            @endforeach
        </select>
    </div>

    <!-- Xã/Phường -->
    <div class="form-group">
        <label for="IDWard">Xã/Phường</label>
        <select class="form-control" id="IDWard" name="IDWard" required>
            <option value="">Chọn xã/phường</option>
            @foreach ($cities as $city)
                @foreach ($city->districts as $district)
                    @foreach ($district->wards as $ward)
                        <option value="{{ $ward->id }}" data-district-id="{{ $district->id }}">{{ $ward->NameWard }}</option>
                    @endforeach
                @endforeach
            @endforeach
        </select>
    </div>

    <!-- Địa chỉ cụ thể -->
    <div class="form-group">
        <label for="Address">Địa chỉ cụ thể</label>
        <input type="text" class="form-control" id="Address" name="Address" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
    <a href="{{ route('login') }}" class="btn btn-secondary btn-block">Đăng Nhập</a>
</form>
@endsection
