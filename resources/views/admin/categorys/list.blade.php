@extends('layouts.admin')
<!-- css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- css -->
@section('content')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Bảng thể loại sách</h4>
                    <div class="add-product">
                        <a href="{{route('addCategory')}}">Thêm thể loại</a>
                    </div>
                    <!-- search -choice -->
                    <div class="d-flex justify-content-between align-items-center mb-3 header_content_form_search">

                        <div class="d-flex align-items-center filter_search">
                            <ul class="nav nav-pills Choice_item1_search filter_search_menu_choice">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lọc theo tên</a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav nav-pills Choice_item2_search filter_search_menu_choice">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lọc theo đánh giá</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <form class="d-flex align-items-center form_search_list" role="search" style="margin-bottom:0px ;float:left">
                            <input class="form-control me-2 search_list" type="search" placeholder="search" aria-label="Search">
                            <button class="btn btn-outline-success btn_search_list " style="border:1px solid #000 ; color:#000" type="submit">Search</button>
                        </form>

                    </div>
                    <!-- search -choice -->
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>

                                <th>Name of Asset</th>
                                <th>Status</th>
                                <th>Subject</th>
                                <th>Department</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Setting</th>
                            </tr>

                            <tr>
                                <td>6</td>

                                <td>Quality Bol pen</td>
                                <td>
                                    <button class="ps-setting">Paused</button>
                                </td>
                                <td>Java</td>
                                <td>CSE</td>
                                <td>CD</td>
                                <td>$1000</td>
                                <td>
                                    <a href="{{route('editCategory')}}">
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <button onclick="return confirm('Bạn có muốn xóa thể loại này không ?')" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item page-item-number"><a class="page-link" href="#">1</a></li>
                            <li class="page-item page-item-number"><a class="page-link" href="#">2</a></li>
                            <li class="page-item page-item-number"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection