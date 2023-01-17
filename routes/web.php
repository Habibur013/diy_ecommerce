<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

route::get('/',[HomeController::class, 'index']);
route::get('/view_event_galary',[HomeController::class, 'view_event_galary']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class, 'redirect']);
route::get('/view_category',[AdminController::class, 'view_category']);
route::post('/add_category',[AdminController::class, 'add_category']);
route::get('/delete_category/{id}',[AdminController::class, 'delete_category']);
route::get('/view_product',[AdminController::class, 'view_product']);
route::post('/add_product',[AdminController::class, 'add_product']);
route::get('/show_product',[AdminController::class, 'show_product']);
route::get('/delete_product/{id}',[AdminController::class, 'delete_product']);
route::get('/edit_product/{id}',[AdminController::class, 'edit_product']);
route::post('/edit_product_confirm/{id}',[AdminController::class, 'edit_product_confirm']);
route::get('/view_order',[AdminController::class, 'view_order']);
route::get('/delivered/{id}',[AdminController::class, 'delivered']);
route::get('/print_pdf/{id}',[AdminController::class, 'print_pdf']);



route::get('/product_details/{id}',[HomeController::class, 'product_details']);
route::post('/add_cart/{id}',[HomeController::class, 'add_cart']);
route::get('/show_cart',[HomeController::class, 'show_cart']);
route::get('/remove_cart/{id}',[HomeController::class, 'remove_cart']);
route::post('/add_order',[HomeController::class, 'add_order']);














