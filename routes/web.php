<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PhieumuonController;
=======

>>>>>>> origin/Duy
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', function(){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
=======
// Route::get('/', function () { return view('welcome');});


Route::get('/home', function () { return view('client/home');})
->middleware(['auth','verified'])->name('home');

Route::get('/admin', function () { return view('admin/homeadmin');})
->middleware(['auth','verified'])->name('admin');

require __DIR__.'/auth.php';




// admin

//dashboard
// Route::get('/admin', function () { return view('admin/homeadmin');})->name('admin');

// category books
Route::get('/danh-muc', function () { return view('admin/categorys/list'); })->name('listCategory');
Route::group(['prefix'=>'/danh-muc'],function(){
    Route::get('/them-danh-muc', function () { return view('admin/categorys/add'); })->name('addCategory');
    Route::get('/chinh-sua-danh-muc', function () { return view('admin/categorys/edit'); })->name('editCategory');
});


// Books
Route::get('/sach', function () { return view('admin/books/list'); })->name('listBook');
Route::group(['prefix'=>'/sach'],function(){
Route::get('/them-sach', function () { return view('admin/books/add'); })->name('addBook');
Route::get('/chinh-sua-sach', function () { return view('admin/books/edit'); })->name('editBook');
});


// carts
Route::get('/quan-li-muon-tra', function () { return view('admin/carts/list'); })->name('listCart');
Route::group(['prefix'=>'/quan-li-muon-tra'],function(){
Route::get('/chi-tiet-muon-tra', function () { return view('admin/carts/detail'); })->name('detailCart');
});

// comments & rates
Route::get('/comments-rates', function () { return view('admin/comments_rates/list'); })->name('listCommentsRates');

// members
Route::get('/tat-ca-khach-hang', function () { return view('admin/members/list'); })->name('listMember');
Route::group(['prefix'=>'/tat-ca-khach-hang'],function(){
Route::get('/them-khach-hang', function () { return view('admin/members/add'); })->name('addMember');
Route::get('/chinh-sua-thong-tin-khach-hang', function () { return view('admin/members/edit'); })->name('editMember');
});

//librarians
Route::get('/nhan-vien', function () { return view('admin/librarians/list'); })->name('listLibrarian');
Route::group(['prefix'=>'/nhan-vien'],function(){
Route::get('/them-nhan-vien', function () { return view('admin/librarians/add'); })->name('addLibrarian');
Route::get('/chinh-sua-thong-tin-nhan-vien', function () { return view('admin/librarians/edit'); })->name('editLibrarian');
});


//client

//Home
Route::get('/', function () { return view('client.home');})->name('home');

// books
Route::get('/xxx', function () { return view('client.books.books');})->name('books');
Route::get('/chi-tiet-sach', function () { return view('client.books.detailsBook');})->name('detailsBook');

// cart
Route::get('/gio-sach', function () { return view('client.carts.cart');})->name('cart');

// historyCart
Route::get('/lich-su', function () { return view('client.carts.historyCart');})->name('historyCart');

// detailsAccount
Route::get('/tai-khoan-cua-ban', function () { return view('client.users.user');})->name('user');







>>>>>>> origin/Duy
