<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
          {{-- <a href="index.html" class="logo">
              <img
                  src="{{ asset('assets/img/vinawatch_logo.png') }}"
                  alt="VinaWatch Logo"
                  class="navbar-brand"
                  height="40"
              />
          </a> --}}
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
                  <a data-bs-toggle="collapse" href="#userManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý người dùng</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="userManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm người dùng mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa người dùng</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#manufacturerManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý nhà sản xuất</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="manufacturerManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm nhà sản xuất mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa nhà sản xuất</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#categoryManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý danh mục</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="categoryManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm danh mục mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa danh mục</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#watchManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý đồng hồ</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="watchManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm đồng hồ mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa đồng hồ</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#engineManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý động cơ</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="engineManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm động cơ mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa động cơ</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#waterResistanceManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý mức độ chống nước</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="waterResistanceManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm mức độ chống nước mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa mức độ chống nước</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#glassMaterialManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý chất liệu mặt kính</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="glassMaterialManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm chất liệu mặt kính mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa mặt kính</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#glassSizeManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý kích thước mặt kính</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="glassSizeManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm kích thước mặt kính mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa kích thước mặt kính</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#strapMaterialManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý chất liệu dây đồng hồ</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="strapMaterialManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm chất liệu dây đồng hồ mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa chất liệu dây đồng hồ</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#strapSizeManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý kích thước dây đồng hồ</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="strapSizeManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm kích thước dây đồng hồ mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa kích thước dây đồng hồ</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#paymentMethodsManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý phương thức thanh toán</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="paymentMethodsManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Thêm phương thức thanh toán mới</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa phương thức thanh toán</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item" style="text-align: left;">
                  <a data-bs-toggle="collapse" href="#cityManagement">
                      <i class="fas fa-layer-group"></i>
                      <p>Quản lý đơn vị hành chính</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="cityManagement">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="components/avatars.html">
                                  <span class="sub-item">Quản lý thành phố</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/buttons.html">
                                  <span class="sub-item">Chỉnh sửa quận/huyện</span>
                              </a>
                          </li>
                          <li>
                              <a href="components/avatars.html">
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
