<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('admin')}}"><img class="main-logo" src="{{asset('assets/admin/img/logo/logo.png')}}" alt="" /></a>
            <strong><a href="{{route('admin')}}"><img src="{{asset('assets/admin/img/logo/logosn.png')}}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a class="" href="{{route('listCategory')}}" aria-expanded="false"><span class=" icon-wrap"><i class="bi bi-columns-gap"></i></span> <span class="mini-click-non">Thể loại sách</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('listBook')}}" aria-expanded="false"><span class=" icon-wrap"><i class="bi bi-journal-text"></i></i></span> <span class="mini-click-non">Sách</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('listMember')}}" aria-expanded="false"><span class=" icon-wrap"><i class="bi bi-person-lines-fill"></i></span> <span class="mini-click-non">Khách Hàng</span></a>
                    </li>
                    <!-- thông tin nhan viên -->
                    <li>
                        <a class="" href="{{route('listLibrarian')}}" aria-expanded="false"><span class=" icon-wrap"><i class="bi bi-file-earmark-person"></i></span> <span class="mini-click-non">Nhân Viên</span></a>
                    </li>
                    <!-- Mượn / Trả -->
                    <li>
                        <a class="" href="{{route('listCart')}}" aria-expanded="false"><span class=" icon-wrap"><i class="bi bi-receipt"></i></span> <span class="mini-click-non">Mượn/Trả Sách</span></a>
                    </li>
                    <!-- Comments / Rates -->
                    <li>
                        <a class="" href="{{route('listCommentsRates')}}" aria-expanded="false"><span class="icon-wrap"><i class="bi bi-hand-thumbs-up"></i></span> <span class="mini-click-non">Comment/Rate</span></a>
                    </li>
                    <!-- Dashboard -->
                    <li>
                        <a class="" href="{{route('admin')}}" aria-expanded="false"><span class=" icon-wrap"><i class="bi bi-list-task"></i></span> <span class="mini-click-non">Dashboard</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<div class="all-content-wrapper">
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
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link  ">

                                                    <img src="{{asset('assets/admin/img/product/pro4.jpg')}}" alt="" />
                                                    <span class="admin-name">{{ Auth::user()->name }}</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
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
                <div class="row " style="height:50px">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="line-height:50px ;color: #fff">
                        <div style="float:left;margin-left:16px;font-size:16px;">MENU </div>
                        
                        <div class="btn-group" style="float:right;margin-right:16px;margin-top:4px">
                            <button class="btn btn-secondary  btn_menu_categoty"style="background-color: #262626" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list" style="font-size:21px ; "></i>
                            </button>
                            <ul class="dropdown-menu" style="width:100%">
                                <li><a class="dropdown-item pd-8px-16px" href="{{route('listCategory')}}"><span class=" icon-wrap"><i class="bi bi-columns-gap"></i></span>  Thể Loại Sách</a></li>
                                <li><a class="dropdown-item pd-8px-16px" href="{{route('listBook')}}" style="border-top:1px solid #ccc"><span class=" icon-wrap"><i class="bi bi-journal-text"></i></i></span>  Sách</a></li>
                                <li><a class="dropdown-item pd-8px-16px" href="{{route('listMember')}}"style="border-top:1px solid #ccc"><span class=" icon-wrap"><i class="bi bi-person-lines-fill"></i></span>  Khách Hàng</a></li>
                                <li><a class="dropdown-item pd-8px-16px" href="{{route('listLibrarian')}}"style="border-top:1px solid #ccc"><span class=" icon-wrap"><i class="bi bi-file-earmark-person"></i></span>  Nhân Viên</a></li>
                                <li><a class="dropdown-item pd-8px-16px"  href="{{route('listCart')}}"style="border-top:1px solid #ccc"><span class=" icon-wrap"><i class="bi bi-receipt"></i></span>  Mượn/Trả Sách</a></li>
                                <li><a class="dropdown-item pd-8px-16px" href="{{route('listCommentsRates')}}"style="border-top:1px solid #ccc"><span class="icon-wrap"><i class="bi bi-hand-thumbs-up"></i></span>  Comment/Rate</a></li>
                                <li><a class="dropdown-item pd-8px-16px" href="{{route('admin')}}"style="border-top:1px solid #ccc"><span class=" icon-wrap"><i class="bi bi-list-task"></i></span>  Dashboard</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav mobile -->
    </div>

</div>