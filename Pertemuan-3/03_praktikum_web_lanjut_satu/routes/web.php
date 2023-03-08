<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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
Route::get('/home', function () {
    return view('home', ['home' => 'Home']);
});

Route::prefix('/product')->group(function () {
    Route::get('/{product}', function ($product) {
        return view('product', ['product' => $product]);
    });
});

Route::get('/news/{news}', function ($news) {
    return view('news', ['news' => $news]);
});

Route::prefix('/program')->group(function () {
    Route::get('/{program}', function ($program) {
        return view('program', ['program' => $program]);
    });
});

Route::get('about-us', function () {
    return view('about-us', ['about-us' => 'About']);
});

Route::resource('/contact-us', ContactUsController::class)->only('index');
Route::post('/contact-us', [ContactUsController::class, 'store']);


