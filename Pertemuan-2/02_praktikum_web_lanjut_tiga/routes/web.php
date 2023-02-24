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
    return 'Selamat Datang di Halaman Home';
});

Route::get('/product', function () {
    echo "<h1>Menampilkan daftar product :</h1>
    <h5><a href='http://127.0.0.1:8000/products/marbel-edu-games'>1. Marbel Edu Games</h5></a>
    <h5><a href='http://127.0.0.1:8000/products/marbel-and-friends-kids-games'>2. Marbel And Friends Kids Games</h5></a>
    <h5><a href='http://127.0.0.1:8000/products/riri-story-books-animations'>3. Riri Story Books</h5></a>
    <h5><a href='http://127.0.0.1:8000/products/kolak-kids-songs'>4. Kolak Kids Songs</h5></a>";
});
Route::prefix('/product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return 'Menampilkan Game marbel-edu-games';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Menampilkan Game marbel-and-friends-kids-games';
    });
    Route::get('/riri-story-books-animations', function () {
        return 'Menampilkan Game riri-story-books-animations';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Menampilkan Game kolak-kids-songs';
    });
});

Route::get('/news/{title?}', function ($title=null) {
    if ($title == null) {
        echo "Menampilkan daftar news terbaru";
    } else {
        echo "Menampilkan news dengan title : $title";
    }
});


Route::get('/program', function () {
    echo "<h1>Menampilkan daftar Program :</h1>
    <h5><a href='http://127.0.0.1:8000/program/karir'>1. Karir</h5></a>
    <h5><a href='http://127.0.0.1:8000/program/magang'>2. Magang</h5></a>
    <h5><a href='http://127.0.0.1:8000/program/kunjungan-industri'>3. Kunjungan Industri</h5></a>";
});
Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return 'Menampilkan Program Karir';
    });
    Route::get('/magang', function () {
        return 'Menampilkan Program Magang';
    });
    Route::get('/kunjungan-industri', function () {
        return 'Menampilkan Program kunjungan industri';
    });
});

Route::get('/about-us', function () {
    return redirect('Menampilkan About Us');
});


Route::resource('/contact-us', ContactUsController::class)->only('index');


