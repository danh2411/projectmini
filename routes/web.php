<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin/homeadmin');
});


// category books
Route::get('/them-danh-muc', function () { return view('admin/categorys/add'); })->name('addCategory');
Route::get('/danh-muc', function () { return view('admin/categorys/list'); })->name('listCategory');
Route::get('/chinh-sua-danh-muc', function () { return view('admin/categorys/edit'); })->name('editCategory');

// Books
Route::get('/them-sach', function () { return view('admin/books/add'); })->name('addBook');
Route::get('/sach', function () { return view('admin/books/list'); })->name('listBook');
Route::get('/chinh-sua-sach', function () { return view('admin/books/edit'); })->name('editBook');

// carts
Route::get('/quan-li-muon-tra', function () { return view('admin/carts/list'); })->name('listCart');
Route::get('/chi-tiet-muon-tra', function () { return view('admin/carts/detail'); })->name('detailCart');

// comments & rates
Route::get('/comments-rates', function () { return view('admin/comments_rates/list'); })->name('listCommentsRates');

// members
Route::get('/them-khach-hang', function () { return view('admin/members/add'); })->name('addMember');
Route::get('/khach-hang', function () { return view('admin/members/list'); })->name('listMember');
Route::get('/chinh-sua-thong-tin-khach-hang', function () { return view('admin/members/edit'); })->name('editMember');
