@extends('Admin.index')

@section('content')
    <div class="container">
        <h1>Danh sách đồng hồ</h1>
        <a href="{{ route('watches.create') }}" class="btn btn-primary">Thêm đồng hồ mới</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Nhà sản xuất</th>
                    <th>Danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($watches as $watch)
                    <tr>
                        <td>{{ $watch->id }}</td>
                        <td>{{ $watch->NameWatch }}</td>
                        <td>{{ $watch->PriceWatch }}</td>
                        <td>{{ $watch->manufacturer->NameManufacturer }}</td>
                        <td>{{ $watch->category->NameCategory }}</td>
                        <td>
                            <a href="{{ route('watches.edit', $watch->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <form action="{{ route('watches.destroy', $watch->id) }}" method="POST" style="display:inline-block;">
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