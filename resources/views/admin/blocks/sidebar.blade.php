<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('assets/admin/img/logo/logo.png')}}" alt="" /></a>
                <strong><a href="index.html"><img src="{{asset('assets/admin/img/logo/logosn.png')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <!-- Danh mục sách -->

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Danh Mục Sách</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Category" href="{{route('listCategory')}}"><span class="mini-sub-pro">Bảng danh mục sách</span></a></li>
                                <li><a title="Add Category" href="{{route('addCategory')}}"><span class="mini-sub-pro">Thêm danh mục</span></a></li>
                                <li><a title="Edit Category" href="{{route('editCategory')}}"><span class="mini-sub-pro">Chỉnh sửa danh mục </span></a></li>
                            </ul>
                        </li>
                        <!-- Thông Tin sách -->

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Sách</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Books" href="{{route('listBook')}}"><span class="mini-sub-pro">Tất cả sách</span></a></li>
                                <li><a title="Add Books" href="{{route('addBook')}}"><span class="mini-sub-pro">Thêm sách</span></a></li>
                                <li><a title="Edit Books" href="{{route('editBook')}}"><span class="mini-sub-pro">Chỉnh sửa thông tin sách</span></a></li>
                            </ul>
                        </li>
                        <!-- Thông Tin Khách Hàng -->

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Khách Hàng</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Members" href="{{route('listMember')}}"><span class="mini-sub-pro">Danh sách khách hàng</span></a></li>
                                <li><a title="Add Members" href="{{route('addMember')}}"><span class="mini-sub-pro">Thêm sách</span></a></li>
                                <li><a title="Edit Members" href="{{route('editMember')}}"><span class="mini-sub-pro">Chỉnh sửa thông tin sách</span></a></li>
                            
                            </ul>
                        </li>
                        <!-- Mượn / Trả -->

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Mượn/Trả Sách </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Cart" href="{{route('listCart')}}"><span class="mini-sub-pro">Thông tin mượn/trả sách</span></a></li>
                               
                                
                            </ul>
                        </li>
                        <!-- Comments / Rates -->
                        
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Comment/Rate</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Comments and Rates" href="{{route('listCommentsRates')}}"><span class="mini-sub-pro">Bình luận và đánh giá khách hàng</span></a></li>
                         
                            </ul>
                        </li>
                        <!-- Page -->
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="{{ route('login') }}"><span class="mini-sub-pro">Đăng Nhập</span></a></li>
                                <li><a title="Register" href="{{ route('register') }}"><span class="mini-sub-pro">Đăng Ký</span></a></li> 
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>