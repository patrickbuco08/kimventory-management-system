<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;

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
    return view('index');
});

Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/supplier', [SupplierController::class, 'showSupplierForm'])->name('supplier.form');
Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier');

Route::get('/product', [ProductController::class, 'showProductForm'])->name('product.form');
Route::post('/product', [ProductController::class, 'store'])->name('product');
Route::get('/products', [ProductController::class, 'list'])->name('product.list');
Route::get('/productID/{product}', [ProductController::class, 'product'])->name('products');


Route::get('/roles', [RoleController::class, 'index'])->name('role.form');
Route::get('/list', [RoleController::class, 'list'])->name('role.list');
Route::post('/roles', [RoleController::class, 'store'])->name('role.save');

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
Route::post('/transaction', [TransactionController::class, 'store'])->name('save');


// create the dashboard !

// create ui for product list page !
   // => check ui-cards.html  !

// study upload file !

// after login/registration -> login the user and redirect to admin page !x
