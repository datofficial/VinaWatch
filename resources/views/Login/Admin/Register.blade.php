@extends('Admin.index')

@section('content')
<div class="container">
    <h1>Đăng Ký</h1>
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
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="EmailUser">Email</label>
            <input type="email" class="form-control" id="EmailUser" name="EmailUser" required>
        </div>

        <!-- Ngày sinh -->
        <div class="form-group">
            <label for="DOBUser">Ngày sinh</label>
            <input type="date" class="form-control" id="DOBUser" name="DOBUser" required>
        </div>

        <!-- Vai trò -->
        <div class="form-group">
            <label for="RoleUser">Vai trò</label>
            <select class="form-control" id="RoleUser" name="RoleUser" required>
                <option value="">Chọn vai trò</option>
                <option value="Senior Employee">Senior Employee</option>
                <option value="Junior Employee">Junior Employee</option>
            </select>
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
            </select>
        </div>

        <!-- Xã/Phường -->
        <div class="form-group">
            <label for="IDWard">Xã/Phường</label>
            <select class="form-control" id="IDWard" name="IDWard" required>
                <option value="">Chọn xã/phường</option>
            </select>
        </div>

        <!-- Địa chỉ cụ thể -->
        <div class="form-group">
            <label for="Address">Địa chỉ cụ thể</label>
            <input type="text" class="form-control" id="Address" name="Address" required>
        </div>

        <button type="submit" class="btn btn-primary">Đăng Ký</button>
        <a href="{{ route('login') }}" class="btn btn-secondary">Đăng Nhập</a>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#IDCity').change(function () {
            var cityId = $(this).val();
            if (cityId) {
                $.ajax({
                    url: '/getDistricts/' + cityId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#IDDistrict').empty();
                        $('#IDDistrict').append('<option value="">Chọn quận/huyện</option>');
                        $.each(data, function (key, value) {
                            $('#IDDistrict').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#IDDistrict').empty();
                $('#IDDistrict').append('<option value="">Chọn quận/huyện</option>');
            }
        });

        $('#IDDistrict').change(function () {
            var districtId = $(this).val();
            if (districtId) {
                $.ajax({
                    url: '/getWards/' + districtId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#IDWard').empty();
                        $('#IDWard').append('<option value="">Chọn xã/phường</option>');
                        $.each(data, function (key, value) {
                            $('#IDWard').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#IDWard').empty();
                $('#IDWard').append('<option value="">Chọn xã/phường</option>');
            }
        });
    });
</script>
@endsection
