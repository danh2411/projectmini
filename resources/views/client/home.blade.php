@extends('layouts.client')

<!-- content -->
@section('content')

<!-- background img -->
            <section class="hero-area bg-1 text-center overly"> </section>
<!-- end background img -->




<!-- slide card category -->
<div class="container text-center my-4 form-content " style="color:#000;">
        <div class="row mx-auto my-auto">
            <h2 class="font-weight-light text-left my-3  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="var(--home)"  class="bi bi-bookshelf" viewBox="0 0 16 16">
                    <path stroke="none" stroke-width="1.5" stroke-linecap="round" stroke-path d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zM3 14h10v-3H3v3zm0-4h10V7H3v3zm0-4h10V3H3v3z"/>
                </svg>
                Danh mục sách
            </h2>
            <div class="line" style="width: 100%; height: 1px; background-color: #F2F4F5;">
                <div></div>
            </div>
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" style="color: var(--home);"role="listbox">
                    <a class="carousel-item active" href="{{route('books')}}">
                        <div class="col-md-2">
                            <div class="card card-body border border-0">
                                <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                            </div>
                            <p class="text-dark">Văn học</p>
                        </div>
                    </a>
                    <a class="carousel-item" href="{{route('books')}}">
                        <div class="col-md-2 ">
                            <div class="card card-body border border-0">
                                <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                            </div>
                            <p class="text-dark">Văn học</p>
                        </div>
                    </a>
                    <a class="carousel-item" href="{{route('books')}}">
                        <div class="col-md-2">
                            <div class="card card-body border border-0">
                                <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                            </div>
                            <p class="text-dark">Văn học</p>
                        </div>
                    </a>
                    <a class="carousel-item" href="{{route('books')}}">
                        <div class="col-md-2">
                            <div class="card card-body border border-0">
                                <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                            </div>
                            <p class="text-dark">Văn học</p>
                        </div>
                    </a>
                    <a class="carousel-item" href="{{route('books')}}">
                        <div class="col-md-2">
                            <div class="card card-body border border-0">
                                <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                            </div>
                            <p class="text-dark">Văn học</p>
                        </div>
                    </a>
                    <a class="carousel-item" href="{{route('books')}}">
                        <div class="col-md-2">
                            <div class="card card-body border border-0">
                                <img class="" src="{{asset('assets/client/images/van-hoc.png')}}">
                            </div>
                            <p class="text-dark">Văn học</p>
                        </div>
                    </a>
                </div>
                <a class="carousel-control-prev w-auto button-next-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon border rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto button-next-prev" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon border rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!-- end slide card category -->


<!-- offer product -->
            <div class="container text-center my-4  all-product mb-4">
                    <section class="py-2">
                        <div class="header-all-product">
                            <h2 class="font-weight-light text-left my-3  ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="var(--home)" class="bi bi-journal-text" viewBox="0 0 16 16">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>   Sách đề xuất
                            </h2>

                            <div class="line" style="width: 100%; height: 1px; background-color: #F2F4F5;">
                                <div></div>
                            </div>
                        </div>

                        <div class="container px-4 px-lg-5 mt-3">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



        <!-- product offer -->
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <a href="{{route('detailsBook')}}">
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
                                        </a>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('cart')}}">Add to cart</a></div>
                                        </div>
                                    </div>
                                </div>
     <!-- product offer -->

     






                            </div>
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
                        </div>
                    </section>
                </div>
    <!-- end offer product -->



@endsection
<!-- end content -->

