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

                                        <!-- ---------------------------------------------------------------->
                                        @if(!Auth::user())
                                        <li class="nav-item active cart-icon m-auto">
                                            <a class="nav-link " href="{{route('login')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--home)" class="bi bi-cart3 item--hover" viewBox="0 0 16 16">
                                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg>
                                            </a>
                                        </li>
                                        @else
                                        <li class="nav-item " style="margin-right: 32px;">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle ">

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
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>