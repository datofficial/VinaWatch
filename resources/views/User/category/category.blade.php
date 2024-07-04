@extends('User.layouts.master')

@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2><a href="{{ url('/category/men') }}">Đồng hồ Nam</a></h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Seiko 5 Sports.png') }}" class="img-fluid" alt="Seiko 5 Sports">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Seiko</a></h2>
                        <h2><a href="#">5 Sports</a></h2>
                        <span class="price">$375.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Seiko Presage.png') }}" class="img-fluid" alt="Seiko Presage">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Seiko</a></h2>
                        <h2><a href="#">Presage</a></h2>
                        <span class="price">$785.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Citizen AW1720-51E.png') }}" class="img-fluid" alt="Citizen AW1720-51E">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Citizen</a></h2>
                        <h2><a href="#">AW1720-51E</a></h2>
                        <span class="price">$470.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Citizen Pantone.png') }}" class="img-fluid" alt="Citizen Pantone">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Citizen</a></h2>
                        <h2><a href="#">Pantone</a></h2>
                        <span class="price">$470.00</span>
                    </div>
                </div>
            </div>
            <!-- Add more product entries as needed -->
        </div>
    </div>
</div>
@endsection