<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class="logo" style="text-decoration: none;">
                <h1 class="navbar-brand text-white" style="font-size: 24px; margin: 0;">VinaWatch</h1>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar" style="padding: 10px 20px; font-size: 18px;">
                    <i class="gg-menu-right" style="font-size: 24px;"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler" style="padding: 10px 20px; font-size: 18px;">
                    <i class="gg-menu-left" style="font-size: 24px;"></i>
                </button>
            </div>
            <button class="topbar-toggler more" style="padding: 10px 20px; font-size: 18px;">
                <i class="gg-more-vertical-alt" style="font-size: 24px;"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item" style="text-align: left;">
                    <a href="{{ route('users.index') }}">
                        <i class="fas fa-user"></i>
                        <p>Quản lý nhân viên</p>
                    </a>
                </li>
                <li class="nav-item" style="text-align: left;">
                    <a data-bs-toggle="collapse" href="#watchManagement">
                        <i class="fas fa-watch"></i>
                        <p>Quản lý đồng hồ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="watchManagement">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('watches.index') }}">
                                    <span class="sub-item">Chỉnh sửa đồng hồ</span>
                                </a>
                            </li>
                            @if (Auth::check() && Auth::user()->isAdmin())
                            {{-- Menu hiển thị với admin --}}
                            <li>
                                <a href="{{ route('manufacturers.index') }}">
                                    <span class="sub-item">Quản lý nhà sản xuất</span>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <span class="sub-item">Quản lý danh mục</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('engines.index') }}">
                                    <span class="sub-item">Quản lý động cơ</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('avoidWaters.index') }}">
                                    <span class="sub-item">Quản lý mức độ chống nước</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sizeGlasses.index') }}">
                                    <span class="sub-item">Quản lý kích thước mặt kính</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('materialGlasses.index') }}">
                                    <span class="sub-item">Quản lý chất liệu mặt kính</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sizeStraps.index') }}">
                                    <span class="sub-item">Quản lý kích thước dây</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('materialStraps.index') }}">
                                    <span class="sub-item">Quản lý chất liệu dây</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item" style="text-align: left;">
                    <a href="{{ route('paymentMethods.index') }}">
                        <i class="fas fa-credit-card"></i>
                        <p>Quản lý phương thức thanh toán</p>
                    </a>
                </li>
                <li class="nav-item" style="text-align: left;">
                    <a data-bs-toggle="collapse" href="#cityManagement">
                        <i class="fas fa-city"></i>
                        <p>Quản lý đơn vị hành chính</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="cityManagement">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('cities.index') }}">
                                    <span class="sub-item">Quản lý thành phố</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('districts.index') }}">
                                    <span class="sub-item">Chỉnh sửa quận/huyện</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('wards.index') }}">
                                    <span class="sub-item">Quản lý phường/xã</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
