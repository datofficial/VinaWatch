@extends('Admin.index')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa đồng hồ</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('watches.update', $watch->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="NameWatch">Tên</label>
                <input type="text" name="NameWatch" class="form-control" value="{{ $watch->NameWatch }}" required>
            </div>
            <div class="form-group">
                <label for="DescriptionWatch">Mô tả</label>
                <textarea name="DescriptionWatch" class="form-control" required>{{ $watch->DescriptionWatch }}</textarea>
            </div>
            <div class="form-group">
                <label for="PriceWatch">Giá</label>
                <input type="number" step="0.01" name="PriceWatch" class="form-control" value="{{ $watch->PriceWatch }}" required>
            </div>
            <div class="form-group">
                <label for="ImageWatch">Ảnh</label>
                <input type="file" name="ImageWatch" class="form-control">
                <img src="{{ asset('storage/' . $watch->ImageWatch) }}" alt="{{ $watch->NameWatch }}" width="100">
            </div>
            <div class="form-group">
                <label for="IDManufacturer">Nhà sản xuất</label>
                <select name="IDManufacturer" class="form-control" required>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}" {{ $watch->IDManufacturer == $manufacturer->id ? 'selected' : '' }}>{{ $manufacturer->NameManufacturer }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="IDCategory">Danh mục</label>
                <select name="IDCategory" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $watch->IDCategory == $category->id ? 'selected' : '' }}>{{ $category->NameCategory }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật đồng hồ</button>
            <a href="{{ route('watches.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection