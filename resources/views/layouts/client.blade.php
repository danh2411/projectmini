<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Classimax | Classified Marketplace Template</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

    <!-- favicon -->
    <link href="{{asset('assets/client/images/favicon.png')}}" rel="shortcut icon">

    <!-- 
  Essential stylesheets
  =====================================-->
    <link href="{{asset('assets/client/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/plugins/bootstrap/bootstrap-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">

    <link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet">

</head>

<body class="body-wrapper">


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('assets/client/images/logo.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">

                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <!-- info -->
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                                    <div class="header-right-info">

                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                            <li class="nav-item " style="margin-right: 0px;">
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
                                        </ul>
                                    </div>
                                </div>
                                <!-- end info -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!--===============================
=            Hero Area            =
================================-->

    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
       
        <!-- Container End -->
    </section>


    <!--===========================================
=            Popular deals section            =
============================================-->
<!-- Slide card category  -->

<div class="container text-center my-4  ">
    <h2 class="font-weight-light text-left my-3  " >
   
    
    <svg xmlns="http://www.w3.org/2000/svg" width="30px"  height="30px" fill="#5672f9" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg> 
Danh mục sách</h2>

<div class="line" style="width: 100%; height: 1px; background-color: #F2F4F5;">
    <div></div>
</div>

    
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <a class="carousel-item active" href="#">
                    <div class="col-md-2">
                        <div class="card card-body border border-0">
                            <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                        </div>
                        <p>Văn học</p>
                    </div>
                </a>
                <a class="carousel-item">
                    <div class="col-md-2">
                        <div class="card card-body border border-0">
                            <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                        </div>
                        <p>Văn học</p>
                    </div>
                </a>
                <a class="carousel-item">
                    <div class="col-md-2">
                        <div class="card card-body border border-0">
                            <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                        </div>
                        <p>Văn học</p>
                    </div>
                </a>
                <a class="carousel-item">
                    <div class="col-md-2">
                        <div class="card card-body border border-0">
                            <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                        </div>
                        <p>Văn học</p>
                    </div>
                </a>
                <a class="carousel-item">
                    <div class="col-md-2">
                        <div class="card card-body border border-0">
                            <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                        </div>
                        <p>Văn học</p>
                    </div>
                </a>
                <a class="carousel-item">
                    <div class="col-md-2">
                        <div class="card card-body border border-0">
                            <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                        </div>
                        <p>Văn học</p>
                    </div>
                </a>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev"  >
                <span class="carousel-control-prev-icon bg-primary border border-primary rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto"   href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-primary border border-primary rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- <h5 class="mt-2">Advances one slide at a time</h5> -->
</div>

<!-- End slide card category  -->


    



    <!--==========================================
=            All Category Section            =
===========================================-->

    


<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $120.00 - $280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        		<!-- pagination -->
				<div class="pagination justify-content-center py-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="ad-list-view.html" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="ad-list-view.html">1</a></li>
							<li class="page-item active"><a class="page-link" href="ad-list-view.html">2</a></li>
							<li class="page-item"><a class="page-link" href="ad-list-view.html">3</a></li>
							<li class="page-item">
								<a class="page-link" href="ad-list-view.html" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- pagination -->

   

    <!--============================
=            Footer            =
=============================-->

    <footer class="footer section section-sm">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
                    <!-- About -->
                    <div class="block about">
                        <!-- footer logo -->
                        <img src="{{asset('assets/client/images/logo-footer.png')}}" alt="logo">
                        <!-- description -->
                        <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!-- Link list -->
                <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
                    <div class="block">
                        <h4>Site Pages</h4>
                        <ul>
                            <li><a href="dashboard-my-ads.html">My Ads</a></li>
                            <li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
                            <li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
                            <li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
                            <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Link list -->
                <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
                    <div class="block">
                        <h4>Admin Pages</h4>
                        <ul>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="single.html">Single Page</a></li>
                            <li><a href="store.html">Store Single</a></li>
                            <li><a href="single-blog.html">Single Post</a>
                            </li>
                            <li><a href="blog.html">Blog</a></li>



                        </ul>
                    </div>
                </div>
                <!-- Promotion -->
                <div class="col-lg-4 col-md-7">
                    <!-- App promotion -->
                    <div class="block-2 app-promotion">
                        <div class="mobile d-flex  align-items-center">
                            <a href="index.html">
                                <!-- Icon -->
                                <img src="{{asset('assets/client/images/footer/phone-icon.png')}}" alt="mobile-icon">
                            </a>
                            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
                        </div>
                        <div class="download-btn d-flex my-3">
                            <a href="index.html"><img src="{{asset('assets/client/images/apps/google-play-store.png')}}" class="img-fluid" alt=""></a>
                            <a href="index.html" class=" ml-3"><img src="{{asset('assets/client/images/apps/apple-app-store.png')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </footer>
    <!-- Footer Bottom -->
    <footer class="footer-bottom">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                    <!-- Copyright -->
                    <div class="copyright">
                        <p>Copyright &copy; <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Social Icons -->
                    <ul class="social-media-icons text-center text-lg-right">
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
                        <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
                        <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
                        <li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Container End -->
        <!-- To Top -->
        <div class="scroll-top-to">
            <i class="fa fa-angle-up"></i>
        </div>
    </footer>

    <!-- 
Essential Scripts
=====================================-->
    <script src="{{asset('assets/client/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/client/plugins/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/client/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/client/plugins/bootstrap/bootstrap-slider.js')}}"></script>
    <script src="{{asset('assets/client/plugins/tether/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/client/plugins/raty/jquery.raty-fa.js')}}"></script>
    <script src="{{asset('assets/client/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/client/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="plugins/google-map/map.js" defer></script>

    <script src="{{asset('assets/client/js/script.js')}}"></script>

</body>

</html>