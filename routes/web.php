<?php

use Illuminate\Support\Facades\Route;
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
Route::prefix('admin')->group(function(){
    Route::get('post', function () {
    return 'Phương thức get của path /post';
    });
    Route::get('show-form', function () {
    return view('form');
    });

    Route::prefix('products')->group(function(){
        Route::get('/',function(){
            return 'Danh sách sản phẩm';
        });
        Route::get('add',function(){
            return 'Thêm sản phẩm';
        });
        Route::get('edit', function () {
            return 'Sửa sản phẩm';
        });
        Route::get('delete', function () {
            return 'Xóa sản phẩm';
        });
    });
});