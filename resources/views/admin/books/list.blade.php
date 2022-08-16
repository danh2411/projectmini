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
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection