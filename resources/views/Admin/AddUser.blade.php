@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Thêm Nhân viên</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <!-- Tên Người dùng -->
        <div class="form-group">
            <label for="NameUser">Tên Nhân viên</label>
            <input type="text" class="form-control" id="NameUser" name="NameUser" required>
            @if ($errors->has('NameUser'))
                <span class="text-danger">{{ $errors->first('NameUser') }}</span>
            @endif
        </div>

        <!-- Mật khẩu -->
        <div class="form-group">
            <label for="PasswordUser">Mật khẩu</label>
            <input type="password" class="form-control" id="PasswordUser" name="PasswordUser" required>
            @if ($errors->has('PasswordUser'))
                <span class="text-danger">{{ $errors->first('PasswordUser') }}</span>
            @endif
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
            <input type="date" class="form-control" id="DOBUser" name="DOBUser" required>
            @if ($errors->has('DOBUser'))
                <span class="text-danger">{{ $errors->first('DOBUser') }}</span>
            @endif
        </div>

        <!-- Vai trò -->
        <div class="form-group">
            <label for="RoleUser">Vai trò</label>
            <select class="form-control" id="RoleUser" name="RoleUser" required>
                <option value="">Chọn vai trò</option>
                <option value="0">nhân viên</option>
                <option value="1">admin</option>
            </select>
            @if ($errors->has('RoleUser'))
                <span class="text-danger">{{ $errors->first('RoleUser') }}</span>
            @endif
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
            @if ($errors->has('IDCity'))
                <span class="text-danger">{{ $errors->first('IDCity') }}</span>
            @endif
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
            @if ($errors->has('IDDistrict'))
                <span class="text-danger">{{ $errors->first('IDDistrict') }}</span>
            @endif
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
            @if ($errors->has('IDWard'))
                <span class="text-danger">{{ $errors->first('IDWard') }}</span>
            @endif
        </div>

        <!-- Địa chỉ cụ thể -->
        <div class="form-group">
            <label for="Address">Địa chỉ cụ thể</label>
            <input type="text" class="form-control" id="Address" name="Address" required>
            @if ($errors->has('Address'))
                <span class="text-danger">{{ $errors->first('Address') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

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
    });
</script>
@endsection
