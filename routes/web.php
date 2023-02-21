<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

// Praktikum 1
Route::get('/', function () {
    echo "Selamat Datang";
});

// Route::get('/about', function () {
//     echo "NIM : 2141720268 <br>";
//     echo "Nama : Muhammad Islahuddin";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman artikel dengan ID ".$id ;
// });

// Praktikum 2

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/articles/{id}', [ArticleController::class,'articles']);

// Praktikum 3

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Ini permainan marbel-edu-games";
    });
    Route::get('/marbel-and-friend-kids-game', function () {
        echo "Ini permainan marbel-and-friend-kids-game";
    });
    Route::get('/riri-story-books', function () {
        echo "Ini permainan riri-story-books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Ini permainan kolak-kids-songs";
    });
});

Route::get('/news/{name?}', function ($name = ""){
    return 'Ini halaman berita '.$name;
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Ini karir";
    });
    Route::get('/magang', function () {
        echo "Ini magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Ini kunjungan industri";
    });
});

Route::get('/about-us', function () {
    echo "Haloo";
});

Route::resource('/contact-us', ContactController::class)->only([
    'show'
]);


