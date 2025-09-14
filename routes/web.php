<?php

use App\Http\Middleware\CustomAuthCheck;
use App\Http\Middleware\LogSomething;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\XPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your  lication. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {


//     return view('welcome');
// })->name('welcome');
// //  {{{{{Post List}}}}}
// Route::get('/posts', [XPostController::class, 'Multiple'])->name('posts');

// //  {{{{{Post Create page}}}}}
// Route::get('/posts/create', [XPostController::class, 'Create'])->name('posts.create');

// //  {{{{{Show Single Post}}}}}
// Route::get('/posts/{post}', [XPostController::class, 'ShowSingle'])->name('posts.single');

// //    INSERTING NEW POST
// Route::post('/posts/create/store', [XPostController::class, 'PostCreate'])->name('create-post');

// //  GO TO EDITING PAGE
// Route::get('/posts/{post}/edit', [XPostController::class, 'Edit'])->name('post.single.edit');

// //    VALIDATION POST EDIT ACTION
// Route::put('/posts/{post}/edit', [XPostController::class, 'PostEdit'])->name('post.single.edit');
// //    DELETE POST
// Route::delete('/posts/{post}/delete', [XPostController::class, 'DeletePost'])->name('posts.delete');

Route::resource('posts' , PostController::class);


Route::resource('user' , UserController::class)->except(['show']);

// صفحه welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// فرم ثبت‌نام
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');

// ذخیره اطلاعات ثبت‌نام
Route::post('/register', [UserController::class, 'create'])->name('user.store');



//  عملیات ورود کاربر
Route::post('/user/login', [UserController::class, 'loginaction'])->name('user.login');

//   صفحه ورود کاربر
Route::get('/user/login', [UserController::class, 'login'])->name('login');


// MIDDLEWARE
Route::middleware([CustomAuthCheck::class ])->group(function() {

//  نمایش کاربران
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//  عملیات خروج کاربر
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');
});

// نمایش فرم برای پر کردن فاکتور
Route::get('/invoice/form', [InvoiceController::class, 'index'])->name('invoice.form');

// ارسال درخواست برای ساخت فرم
Route::post('/invoice/store', [InvoiceController::class, 'store'])->name('invoice.store');

// انتقال به صفحه فرم
Route::get('/invoice/show/{number}/{type}', [InvoiceController::class, 'show'])->name('invoice.show');
