@extends('Admin.index')

@section('content')
<div class="container">
    <h1>Danh sách đồng hồ</h1>
    <a href="{{ route('watches.create') }}" class="btn btn-primary mb-3">Thêm đồng hồ mới</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên đồng hồ</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Nhà sản xuất</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($watches as $watch)
                <tr>
                    <td>{{ $watch->id }}</td>
                    <td>{{ $watch->NameWatch }}</td>
                    <td>{{ $watch->DescriptionWatch }}</td>
                    <td>{{ $watch->PriceWatch }}</td>
                    <td><img src="{{ asset('storage/' . $watch->ImageWatch) }}" alt="{{ $watch->NameWatch }}" width="100"></td>
                    <td>{{ $watch->manufacturer->name }}</td>
                    <td>{{ $watch->category->name }}</td>
                    <td>
                        <a href="{{ route('watches.edit', $watch->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                        <form action="{{ route('watches.destroy', $watch->id) }}" method="POST" style="display: inline-block;">
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
