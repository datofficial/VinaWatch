<!-- views/User/index.blade.php -->

@extends('User.layouts.master')

@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url('{{ asset('User/images/sliderwatch1.jpeg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Bộ sưu tập</h1>
                                    <h2 class="head-2">Đồng hồ</h2>
                                    <h2 class="head-3">Nam</h2>
                                    <p><a href="#" class="btn btn-primary">Tìm hiểu ngay</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url('{{ asset('User/images/sliderwatch2.jpeg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Các thương hiệu</h1>
                                    <h2 class="head-2">đồng hồ</h2>
                                    <h2 class="category"><span>Thuỵ Sĩ</span></h2>
                                    <p><a href="#" class="btn btn-primary">Mua ngay tại đây</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url('{{ asset('User/images/sliderwatch3.jpeg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Các thương hiệu</h1>
                                    <h2 class="head-2">đồng hồ</h2>
                                    <h2 class="category"><span>Nhật Bản</span></h2>
                                    <p><a href="#" class="btn btn-primary">Khám phá ngay</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">DANH MỤC ĐỒNG HỒ</h2>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url('{{ asset('User/images/menwatch.jpeg') }}');"></a>
                    <div class="desc">
                        <h2><a href="{{ url('/category/men') }}">Đồng hồ Nam</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url('{{ asset('User/images/womenwatch.jpeg') }}');"></a>
                    <div class="desc">
                        <h2><a href="#">Đồng hồ Nữ</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>CÁC SẢN PHẨM NỔI BẬT</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="{{ url('/detailwatch') }}" class="prod-img">
                        <img src="{{ asset('User/images/Rolex COSMOGRAPH DAYTONA.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">COSMOGRAPH DAYTONA</a></h2>
                        <span class="price">$65.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex SKY-DWELLER.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">SKY-DWELLER</a></h2>
                        <span class="price">$48.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex GMT-MASTER II.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">GMT-MASTER II</a></h2>
                        <span class="price">$18.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex 1908.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">1908</a></h2>
                        <span class="price">$24.000,00</span>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex Day-Date 40.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">Day-Date 40</a></h2>
                        <span class="price">$160.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex SEA-DWELLER.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">SEA-DWELLER</a></h2>
                        <span class="price">$19.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex YACHT-MASTER 40.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">YACHT-MASTER 40</a></h2>
                        <span class="price">$35.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Rolex DATEJUST 36.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Rolex</a></h2>
                        <h2><a href="#">DATEJUST 36</a></h2>
                        <span class="price">$12.000,00</span>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Tissot Powermatic 80.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Tissot</a></h2>
                        <h2><a href="#">Powermatic 80 </a></h2>
                        <span class="price">$1.000,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Tissot Carson Premium.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Tissot</a></h2>
                        <h2><a href="#">Carson Premium</a></h2>
                        <span class="price">$630,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Tissot Le Locle Powermatic 80.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Tissot</a></h2>
                        <h2><a href="#">Le Locle Powermatic</a></h2>
                        <span class="price">$785,00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Tissot T-Classic.jpg') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Tissot</a></h2>
                        <h2><a href="#">T-Classic</a></h2>
                        <span class="price">$1.000,00</span>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{ asset('User/images/Seiko 5 Sports.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
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
                        <img src="{{ asset('User/images/Seiko Presage.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
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
                        <img src="{{ asset('User/images/Citizen AW1720-51E.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
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
                        <img src="{{ asset('User/images/Citizen Pantone.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Citizen</a></h2>
                        <h2><a href="#">Pantone</a></h2>
                        <span class="price">$470.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="{{ url('/watches') }}" class="btn btn-primary btn-lg">HIỂN THỊ TẤT CẢ ĐỒNG HỒ</a></p>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>THƯƠNG HIỆU</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/Tissot-logo.jpg') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/Rolex-logo.jpg') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                      <img src="{{ asset('User/images/Longines-logo.jpg') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                  </a>
              </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/PatekPhilippe-logo.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/Seiko-logo.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/Citizen-logo.jpg') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/Omega-logo.png') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
            <div class="col partner-col text-center">
                <a href="#" class="prod-img">
                    <img src="{{ asset('User/images/Casio-logo.jpg') }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
            </div>
    </div>
</div>
@endsection
