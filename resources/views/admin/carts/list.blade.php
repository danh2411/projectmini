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
                            <h4>Thông tin mượn / trả</h4>
                            <div>
                        <div class="input-group" style="float:left;margin-bottom:20px;">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2 search_list" type="search" placeholder="search" aria-label="Search" >
                                <button class="btn btn-outline-success btn_search_list"style="border:1px solid #000 ; color:#000" type="submit">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills Choice_item1_search " style="float:left; margin-bottom:20px">
                            <li class="nav-item dropdown" style=" border: 1px solid #000; border-radius:8px ;">
                                <a class="nav-link dropdown-toggle" style="padding: 0px 4px; color:#000;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lọc theo tên</a>
                                <ul class="dropdown-menu" style="">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-pills  Choice_item2_search" style="padding-left:8px ;float:left;">
                            <li class="nav-item dropdown" style=" border: 1px solid #000; border-radius:8px ; ">
                                <a class="nav-link dropdown-toggle" style="padding: 0px 4px; color:#000;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lọc theo đánh giá</a>
                                <ul class="dropdown-menu" style=" ">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
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
                                        <td><img src="img/product/book-2.jpg" alt="" /></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>Java</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                        <td>$1000</td>
                                        <td>    
                                            <a href="{{route('detailCart')}}">
                                                <button  data-toggle="tooltip" title="Details" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            </a>
                                            <button onclick="return confirm('Bạn có muốn xóa phiếu mượn / trả này không ?')" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
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