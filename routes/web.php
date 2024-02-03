<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('unicode', function () {
//     return view('home');
// });
// Route::get('post', function () {
//     return view('form');
// });
// Route::post('post', function () {
//     return 'Phương thức post của path /post';
// });
// Route::put('post', function () {
//     return 'Phương thức Put của path /post';
// });
// Route::delete('post', function () {
//     return 'Phương thức Delete của path /post';
// });
// Route::patch('post', function () {
//     return 'Phương thức patch của path /post';
// });
// Route::match(['get','post'],'post',function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any('post',function(Request $request){
//     return $request->method();
// });
// Route::get('show-form',function(){
//     return view('form');
// });
// Route::redirect('post','show-form');
// Route::view('show-form','form');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/posts', 'HomeController@getPosts')->name('post');
Route::get('/chuyen-muc/{id}',[HomeController::class,"getCategories"]);
Route::prefix('admin')->group(function () {
    Route::get('post/{id?}/{slug?}.html', function ($id = null, $slug = null) {
        $content = 'Phương thức get của path /post ';
        $content .= 'id = ' . $id . '</br>';
        $content .= 'slug = ' . $slug;
        return $content;
    })->where('id', '\d+')->where('slug', '.+')->name('admin.show-form');

    Route::get('show-form', function () {
        return view('form');
    })->name('admin.show-form');

    Route::prefix('products')->middleware('checkPermission')->group(function () {
        Route::get('/', function () {
            return 'Danh sách sản phẩm';
        });
        Route::get('add', function () {
            return 'Thêm sản phẩm';
        })->name('admin.products.add');
        Route::get('edit', function () {
            return 'Sửa sản phẩm';
        });
        Route::get('delete', function () {
            return 'Xóa sản phẩm';
        });
    });
});
