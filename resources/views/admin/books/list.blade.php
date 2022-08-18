@extends('layouts.admin')

@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Tất cả sách</h4>
                            <div class="add-product">
                            <a href="{{route('addBook')}}">Thêm sách</a>
                            </div>
                            <div>
                        <div class="input-group" style="float:left;margin-bottom:20px;">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2"style="width:100% ;border-radius: 8px;border-color: #000" type="search" placeholder="search" aria-label="Search" >
                                <button class="btn btn-outline-success"style="border:1px solid #000 ; color:#000" type="submit">Search</button>
                            </form>
                        </div>
                        <ul class="nav nav-pills Choice_item1_search " style="float:left; margin-bottom:20px">
                            <li class="nav-item dropdown" style=" border: 1px solid #000; border-radius:8px ;">
                                <a class="nav-link dropdown-toggle" style="padding: 0px 4px; color:#000;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lọc theo tên</a>
                                <ul class="dropdown-menu " style="">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-pills Choice_item2_search " style="padding-left:8px ;float:left;">
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
                                        <td>1</td>
                                        <td><img src="{{asset('assets/admin/img/product/123.jpg')}}" alt="" /></td>
                                        <td>Web Development Book</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>Html, Css</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                        <td>$1500</td>
                                        <td>
                                            <a href="{{route('editBook')}}">
                                                <button data-toggle="tooltip"  title="Edit" class="pd-setting-ed " href="{{route('editBook')}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            </a>
                                            <button onclick="return confirm('Bạn có muốn xóa thông tin sách này không ?')" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
									<li class="page-item "><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection