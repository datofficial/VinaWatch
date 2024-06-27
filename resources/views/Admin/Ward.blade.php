@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Danh sách Xã/Phường</h1>
    <a href="{{ route('wards.create') }}" class="btn btn-primary">Thêm Xã/Phường</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Xã/Phường</th>
                <th>Quận/Huyện</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wards as $ward)
            <tr>
                <td>{{ $ward->id }}</td>
                <td>{{ $ward->NameWard }}</td>
                <td>{{ $ward->district->NameDistrict }}</td>
                <td>
                    <a href="{{ route('wards.edit', $ward->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('wards.destroy', $ward->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
