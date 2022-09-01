@extends('layouts.admin')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- content -->
@section('content')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Thêm Sách </a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form action="/upload" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="nameasset" type="text" class="form-control" placeholder="Name of Asset">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                                                        </div>
                                                        <div class="form-group alert-up-pd">
                                                            <div class="dz-message needsclick download-custom">
                                                                <!-- upload picture -->
                                                                <div class="dandev-reviews">
                                                                    <div class="form_upload">
                                                                        <label class="dandev_insert_attach"><span> Ấn để Upload ảnh </span></label>
                                                                    </div>
                                                                    <div class="list_attach">
                                                                        <ul class="dandev_attach_view">

                                                                        </ul>
                                                                        <span class="dandev_insert_attach"><i class="dandev-plus">+</i></span>
                                                                    </div>
                                                                </div>
                                                                 <!-- upload picture -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="department" type="number" class="form-control" placeholder="Department">
                                                        </div>
                                                        <div class="form-group res-mg-t-15">
                                                            <input name="type" type="text" class="form-control" placeholder="Type">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="price" type="text" class="form-control" placeholder="Price">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="year" type="number" class="form-control" placeholder="Year">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="status" type="text" class="form-control" placeholder="Status">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Facebook URL">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Twitter URL">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Google Plus">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Linkedin URL">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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

@endsection
<!-- end content -->