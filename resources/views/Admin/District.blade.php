@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Danh sách Quận/Huyện</h1>
    <a href="{{ route('districts.create') }}" class="btn btn-primary">Thêm Quận/Huyện</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Quận/Huyện</th>
                <th>Thành phố</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($districts as $district)
            <tr>
                <td>{{ $district->id }}</td>
                <td>{{ $district->NameDistrict }}</td>
                <td>{{ $district->city->NameCity }}</td>
                <td>
                    <a href="{{ route('districts.edit', $district->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('districts.destroy', $district->id) }}" method="POST" style="display:inline-block;">
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
