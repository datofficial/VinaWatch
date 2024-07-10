<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="{{ url('/') }}">VinaWatch</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <form action="#" class="search-wrap">
                        <div class="form-group">
                            <input type="search" class="form-control search" placeholder="Tìm kiếm">
                            <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li class="has-dropdown">
                            <a href="{{ url('/category/category') }}">Danh mục</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/category/men') }}">Đồng hồ Nam</a></li>
                                <li><a href="{{ url('/category/women') }}">Đồng hồ Nữ</a></li>
                                <li><a href="{{ url('/category/swiss') }}">Đồng hồ Thuỵ Sĩ</a></li>
                                <li><a href="{{ url('/category/japan') }}">Đồng hồ Nhật Bản</a></li>
                                <li><a href="{{ url('/category/mechanical') }}">Đồng hồ Cơ</a></li>
                                <li><a href="{{ url('/category/electronic') }}">Đồng hồ Điện tử</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="{{ url('/brand/brand') }}">Thương hiệu</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/brand/rolex') }}">Rolex</a></li>
                                <li><a href="{{ url('/brand/tissot') }}">Tissot</a></li>
                                <li><a href="{{ url('/brand/patek-philippe') }}">Patek Philippe</a></li>
                                <li><a href="{{ url('/brand/omega') }}">Omega</a></li>
                                <li><a href="{{ url('/brand/seiko') }}">Seiko</a></li>
                                <li><a href="{{ url('/brand/citizen') }}">Citizen</a></li>
                                <li><a href="{{ url('/brand/casio') }}">Casio</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/contact') }}">Liên hệ</a></li>
                        <li class="cart"><a href="{{ url('/cart') }}"><i class="icon-shopping-cart"></i>Giỏ hàng [0]</a></li>
                        <li class="has-dropdown">
                            <a href="{{ url('/profile') }}"><i class="icon-user"></i> Tôi</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/profile') }}">Thông tin cá nhân</a></li>
                                <li><a href="{{ url('/order-history') }}">Lịch sử đơn hàng</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sale">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center">
                    <div class="row">
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="col">
                                    {{-- <h3><a href="#">Các mẫu Đồng hồ sang trọng</a></h3> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="col">
                                    {{-- <h3><a href="#">Những sản phẩm đồng hồ bán chạy nhất</a></h3> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>