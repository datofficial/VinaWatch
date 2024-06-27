@extends('Admin.index')

@section('content')
    <div class="container">
        <h1>Thêm đồng hồ mới</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('watches.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="NameWatch">Tên</label>
                <input type="text" name="NameWatch" class="form-control" value="{{ old('NameWatch') }}" required>
            </div>
            <div class="form-group">
                <label for="DescriptionWatch">Mô tả</label>
                <textarea name="DescriptionWatch" class="form-control" required>{{ old('DescriptionWatch') }}</textarea>
            </div>
            <div class="form-group">
                <label for="PriceWatch">Giá</label>
                <input type="number" step="0.01" name="PriceWatch" class="form-control" value="{{ old('PriceWatch') }}" required>
            </div>
            <div class="form-group">
                <label for="ImageWatch">Ảnh</label>
                <input type="file" name="ImageWatch" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="IDManufacturer">Nhà sản xuất</label>
                <select name="IDManufacturer" class="form-control" required>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->NameManufacturer }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="IDCategory">Danh mục</label>
                <select name="IDCategory" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->NameCategory }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm đồng hồ</button>
            <a href="{{ route('watches.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection