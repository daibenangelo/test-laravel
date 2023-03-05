<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\FacultiesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cafeteria', [OrdersController::class, 'showCafeteria']);
Route::post('/cafeteria', [OrdersController::class, 'takeOrder']);
Route::post('/cafeteria/checkout', [OrdersController::class, 'placeOrder']);
Route::get('/cafeteria/done', function () {
    return view('users_cafeteria_done');
});
Route::get('/shop/{id?}', [ShopController::class, 'show']);

//admin pages
Route::get('/admin/students', [StudentsController::class, 'index']);

Route::resource('/admin/faculties', FacultiesController::class);

Route::get('/admin/students/{id}/upload', [StudentsController::class, 'showUpload']);
Route::post('/admin/students/{id}/upload', [StudentsController::class, 'upload']);

Route::get('/admin/students/{id}/classes', [StudentsController::class, 'showClasses']);
Route::post('/admin/students/{id}/classes', [StudentsController::class, 'enroll']);
?>