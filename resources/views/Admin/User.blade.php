@extends('Admin.index')

@section('content')
    <div class="container">
        <h1>Danh sách Nhân viên</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Thêm Nhân viên mới</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Nhân viên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Thành phố</th>
                    <th>Quận/Huyện</th>
                    <th>Xã/Phường</th>
                    <th>Địa chỉ</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ (1 == $user->RoleUser)? "admin" : "nhân viên"  }}</td>
                        <td>{{ $user->city->NameCity }}</td>
                        <td>{{ $user->district->NameDistrict }}</td>
                        <td>{{ $user->ward->NameWard }}</td>
                        <td>{{ $user->Address }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
