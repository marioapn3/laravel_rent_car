<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarReturnController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReturnCarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();


//ROUTES DISPLAY USER
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');

Route::get('/car', [CarController::class, 'index_car'])->name('index_car');




Route::middleware(['admin'])->group(function () {

    Route::get('/admin/dashboardreturn/edit/{CarReturn}', [CarReturnController::class, 'edit_validate_car'])->name('edit_validate_car');
    Route::patch('/admin/dashboardcar/{CarReturn}', [CarReturnController::class, 'update_return'])->name('update_return');
    Route::get('/admin/dashboardhome', [OrderController::class, 'dashboard_home'])->name('dashboard_home');
    Route::get('/admin/dashboardhome/{range}', [OrderController::class, 'dashboard_home_'])->name('dashboard_home_');


    Route::post('/admin/dashboardorder/confirm/{payment}', [PaymentController::class, 'confirmPayment'])->name('confirmPayment');


    Route::get('/admin/dashboardcar', [AdminController::class, 'dashboard_car'])->name('dashboard_car');

    Route::get('admin/dashboardcar/create', [AdminController::class, 'create_car'])->name('create_car');
    Route::post('admin/dashboardcar/create', [AdminController::class, 'store_car'])->name('store_car');
    Route::delete('/admin/dashboardcar/{car}', [AdminController::class, 'delete_car'])->name('delete_car');

    Route::get('/admin/dashboardcar/{car}/edit', [AdminController::class, 'edit_car'])->name('edit_car');
    Route::patch('/admin/dashboardcar/{car}/update', [AdminController::class, 'update_car'])->name('update_car');
    Route::get('/admin/dashboarduser', [AdminController::class, 'dashboard_user'])->name('dashboard_user');
    Route::delete('/admin/dashboarduser/{user}/delete', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::get('/admin/dashboardorder', [OrderController::class, 'dashboard_order'])->name('dashboard_order');
    Route::get('/admin/dashboardreturn', [CarReturnController::class, 'dashboard_return'])->name('dashboard_return');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [UserController::class, 'index_user'])->name('index_user');
    Route::patch('/profile', [UserController::class, 'edit_user'])->name('edit_user');
    //Car Route
    Route::get('/car/{car}', [CarController::class, 'show_car'])->name('show_car');
    Route::get('/order', [OrderController::class, 'show_order'])->name('show_order');
    Route::post('/order/{car}', [OrderController::class, 'add_order'])->name('add_order');
    Route::post('/order/{payment}/pay', [PaymentController::class, 'submit_payment_receipt'])->name('submit_payment_receipt');
});
