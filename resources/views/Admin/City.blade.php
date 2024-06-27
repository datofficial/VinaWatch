@extends('Admin.index')
@section('content')
<div class="container">
    <h1>Danh sách Thành phố</h1>
    <a href="{{ route('cities.create') }}" class="btn btn-primary">Thêm Thành phố</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Thành phố</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->NameCity }}</td>
                <td>
                    <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('cities.destroy', $city->id) }}" method="POST" style="display:inline-block;">
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
