@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Chỉnh sửa Người dùng</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Tên Người dùng -->
        <div class="form-group">
            <label for="NameUser">Tên Người dùng</label>
            <input type="text" class="form-control" id="NameUser" name="NameUser" value="{{ $user->NameUser }}" required>
        </div>

        <!-- Mật khẩu -->
        <div class="form-group">
            <label for="PasswordUser">Mật khẩu</label>
            <input type="password" class="form-control" id="PasswordUser" name="PasswordUser">
        </div>

        <!-- Số điện thoại -->
        <div class="form-group">
            <label for="PhoneUser">Số điện thoại</label>
            <input type="text" class="form-control" id="PhoneUser" name="PhoneUser" value="{{ $user->PhoneUser }}" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="EmailUser">Email</label>
            <input type="email" class="form-control" id="EmailUser" name="EmailUser" value="{{ $user->EmailUser }}" required>
        </div>

        <!-- Ngày sinh -->
        <div class="form-group">
            <label for="DOBUser">Ngày sinh</label>
            <input type="date" class="form-control" id="DOBUser" name="DOBUser" value="{{ $user->DOBUser }}" required>
        </div>

        <!-- Vai trò -->
        <div class="form-group">
            <label for="RoleUser">Vai trò</label>
            <select class="form-control" id="RoleUser" name="RoleUser" required>
                <option value="">Chọn vai trò</option>
                {{-- Senior có thể đọc, tạo, sửa  --}}
                <option value="1">admin</option>
                {{-- Junior có thể đọc  --}}
                <option value="0">nhan viên</option>
                <option value="Customer">Customer</option>
            </select>
        </div>

        <!-- Thành phố -->
        <div class="form-group">
            <label for="IDCity">Thành phố</label>
            <select class="form-control" id="IDCity" name="IDCity" required>
                <option value="">Chọn thành phố</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $user->IDCity == $city->id ? 'selected' : '' }}>{{ $city->NameCity }}</option>
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
                        <option value="{{ $district->id }}" data-city-id="{{ $city->id }}" {{ $user->IDDistrict == $district->id ? 'selected' : '' }}>{{ $district->NameDistrict }}</option>
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
                            <option value="{{ $ward->id }}" data-district-id="{{ $district->id }}" {{ $user->IDWard == $ward->id ? 'selected' : '' }}>{{ $ward->NameWard }}</option>
                        @endforeach
                    @endforeach
                @endforeach
            </select>
        </div>

        <!-- Địa chỉ cụ thể -->
        <div class="form-group">
            <label for="Address">Địa chỉ cụ thể</label>
            <input type="text" class="form-control" id="Address" name="Address" value="{{ $user->Address }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

{{-- Dùng để thay đổi màu giá trị nhập của ngày sinh --}}
<!-- CSS -->
<style>
    .date-input {
        color: #000; /* Default text color */
    }
    .date-input:focus {
        color: #000; /* Focused text color */
    }
    /* Thay đổi màu chữ dành cho Chrome, Safari */
    .date-input::-webkit-datetime-edit {
        color: #000; /* WebKit based browsers */
    }
     /* Thay đổi màu chữ dành cho Firefox */
    .date-input::-moz-datetime-edit {
        color: #000; /* Mozilla based browsers */
    }
    /* Thay đổi màu chữ dành cho Edge, Internet Explorer */
    .date-input::ms-datetime-edit {
        color: #000; /* Microsoft based browsers */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var citySelect = document.getElementById('IDCity');
        var districtSelect = document.getElementById('IDDistrict');
        var wardSelect = document.getElementById('IDWard');

        // Ẩn tất cả các tùy chọn của quận/huyện và xã/phường ban đầu
        for (var i = 0; i < districtSelect.options.length; i++) {
            districtSelect.options[i].style.display = 'none';
        }
        for (var i = 0; i < wardSelect.options.length; i++) {
            wardSelect.options[i].style.display = 'none';
        }

        // Khi thay đổi thành phố
        citySelect.addEventListener('change', function () {
            var cityId = this.value;

            // Hiển thị/ẩn các quận/huyện dựa trên lựa chọn thành phố
            for (var i = 0; i < districtSelect.options.length; i++) {
                var option = districtSelect.options[i];
                option.style.display = option.getAttribute('data-city-id') == cityId ? 'block' : 'none';
            }
            districtSelect.value = "";
            wardSelect.value = "";

            // Ẩn tất cả các tùy chọn của xã/phường khi thay đổi thành phố
            for (var i = 0; i < wardSelect.options.length; i++) {
                wardSelect.options[i].style.display = 'none';
            }
        });

        // Khi thay đổi quận/huyện
        districtSelect.addEventListener('change', function () {
            var districtId = this.value;

            // Hiển thị/ẩn các xã/phường dựa trên lựa chọn quận/huyện
            for (var i = 0; i < wardSelect.options.length; i++) {
                var option = wardSelect.options[i];
                option.style.display = option.getAttribute('data-district-id') == districtId ? 'block' : 'none';
            }
            wardSelect.value = "";
        });

        // Gọi sự kiện thay đổi ban đầu để đảm bảo trạng thái ban đầu đúng
        citySelect.dispatchEvent(new Event('change'));
        districtSelect.dispatchEvent(new Event('change'));
    });
</script>
@endsection
