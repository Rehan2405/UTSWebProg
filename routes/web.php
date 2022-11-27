<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublisherController;
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
Route::get('/home', [BooksController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail/{id}', [BooksController::class, 'bookdetail']);

// Route::get('/detail1', function () {
//     return view('detail1',[
        
//     ]);
// });
// Route::get('/detail2', function () {
//     return view('detail2',[
        
//     ]);
// });
// Route::get('/detail3', function () {
//     return view('detail3',[
        
//     ]);
// });
Route::get('/publisher', function () {
    return view('publisher');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/horror', function () {
    return view('horror');
});