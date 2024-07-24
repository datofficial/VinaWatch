@extends('User.layouts.master')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="/">Trang chủ</a></span> / <span>Chi tiết sản phẩm</span></p>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container">
        @foreach ($watches as $watch )
            <div class="row row-pb-lg product-detail-wrap">
                <div class="col-sm-8">
                    <div class="product-entry border" style="width: 500px">
                        <a href="#" class="prod-img">
                            <img  src="{{ asset('storage/'. $watch->ImageWatch) }}" class="img-fluid" alt="{{ $watch->NameWatch }}">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-desc">
                        <h3>{{ $watch->NameWatch }}</h3>
                        <p class="price">
                            <span>{{ number_format($watch->PriceWatch, 0, ',', '.') }} VND</span>
                            
                        </p>
                        <p>{{ $watch->DescriptionWatch }}</p>
                        <div class="size-wrap">
                            <div class="block-26 mb-2">
                                <h4>Kích thước</h4>
                                <ul>
                                    <li><a href="#">38mm</a></li>
                                    <li><a href="#">40mm</a></li>
                                    <li><a href="#">42mm</a></li>
                                    <li><a href="#">44mm</a></li>
                                </ul>
                            </div>
                            <div class="block-26 mb-4">
                                <h4>Độ rộng</h4>
                                <ul>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">W</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                    <i class="icon-minus2"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-1">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus2"></i>
                                </button>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p class="addtocart"><a href="{{ url('/cart') }}" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Thêm vào giỏ hàng</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Nhà sản xuất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Đánh giá</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                    <p>{{ $watch->DescriptionWatch }}</p>
                                </div>

                                <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                    <p>{{ $watch->manufacturer->name }}</p>
                                </div>

                                <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h3 class="head">23 Đánh giá</h3>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Jacob Webb</span>
                                                        <span class="text-right">14 Tháng 3, 2018</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Chất lượng sản phẩm tốt, giao hàng nhanh chóng.</p>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(images/person2.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Michael Scott</span>
                                                        <span class="text-right">14 Tháng 3, 2018</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Đồng hồ đẹp, sang trọng, đúng như mô tả.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="rating-wrap">
                                                <h3 class="head">Đánh giá của bạn</h3>
                                                <div class="wrap">
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            (98%)
                                                        </span>
                                                        <span>20 Đánh giá</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (85%)
                                                        </span>
                                                        <span>10 Đánh giá</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (70%)
                                                        </span>
                                                        <span>5 Đánh giá</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (10%)
                                                        </span>
                                                        <span>0 Đánh giá</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (0%)
                                                        </span>
                                                        <span>0 Đánh giá</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- bootstrap 4.1 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- jQuery easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}"></script>

<script>
    $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);

              
                // Increment
            
        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });
</script>
@endsection
