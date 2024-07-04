@extends('User.layouts.master')

@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Đồng Hồ Nam</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach ($products as $product)
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="{{ asset($product['image']) }}" class="img-fluid" alt="{{ $product['name'] }}">
                        </a>
                        <div class="desc">
                            <h2><a href="#">{{ $product['name'] }}</a></h2>
                            <span class="price">{{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection