<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <a href="{{route('admin')}}"><img class="main-logo" src="{{asset('assets/admin/img/logo/logo.png')}}" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="educate-icon educate-nav"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                       
                                        <li class="nav-item " style="margin-right: 32px;">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle ">

                                                <img src="{{asset('assets/admin/img/product/pro4.jpg')}}" alt="" />
                                                <span class="admin-name">{{ Auth::user()->name }}</span>
                                                <!-- <i class="fa fa-angle-down edu-icon edu-down-arrow"></i> -->
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                            {{ __('Đăng xuất') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- nav mobile -->
    <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                       <!-- Danh mục sách -->

                                        <li><a data-toggle="collapse" data-target="#demolibra" href="{{route('listCategory')}}">Danh Mục Sách <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <!-- <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="{{route('listCategory')}}">Bảng danh mục sách</a>
                                                </li>
                                                <li><a href="{{route('addCategory')}}" >Thêm danh mục</a>
                                                </li>
                                                <li><a href="{{route('editCategory')}}">Chỉnh sửa danh mục</a>
                                                </li>
                                            </ul> -->
                                        </li>
                                       <!-- Thông Tin sách -->
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="{{route('listBook')}}">Sách <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <!-- <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="{{route('listBook')}}">Tất cả sách</a>
                                                </li>
                                                <li><a href="{{route('addBook')}}">Thêm sách</a>
                                                </li>
                                                <li><a href="{{route('editBook')}}">Chỉnh sửa thông tin sách</a>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <!-- Thông Tin Khách Hàng -->
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#nav">Khách Hàng <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <!-- <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Danh sách khách hàng</a>
                                                </li>
                                               
                                            </ul> -->
                                        </li>
                                        <!-- Mượn / Trả -->
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="{{route('listCart')}}">Mượn / Trả Sách <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <!-- <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Thông tin mượn/trả sách</a>
                                                </li>
                                             
                                            </ul> -->
                                        </li>
                                        <!-- Comments / Rates -->
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="{{route('listCommentsRates')}}">Comments / Rates <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <!-- <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Bình luận và đánh giá khách hàng </a>
                                                </li>
                                               
                                            </ul> -->
                                        </li>
                                        <!-- page -->
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="{{route('admin')}}">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <!-- <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                               
                                            </ul> -->
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- nav mobile -->

    </div>