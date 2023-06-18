<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\projectController;
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




Route::get('/',HomeController::class);

Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/blog-detail',[BlogController::class, 'blogDetail']);
});

Route::get('/project-detail', [ProjectController::class, 'index']);

Route::get('/contact', [ContactUsController::class, 'index']);
