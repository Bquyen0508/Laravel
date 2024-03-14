<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Response;


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

//client route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
Route::post('/them-san-pham', [HomeController::class, 'postAdd'])->name('post-add');
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);

Route::get('demo-response', function () {
    // $response = new Response('',200);
    $content = [
        'Item 1',
        'Item 2',
        'Item 3'
    ];
    //$response = (new Response($content))->header('Content-Type', 'application/json');
    //return response()->json($content, 201)->header("Api-Key",'1234');

    //$newResponse = (new Response())->cookie('unicode', 'training PHP', 30);
    return view('clients.demo-test');
})->name('demo-response');

Route::post('demo-response', function (Request $request) {
    if (!empty($request->username)) {
        return back()->withInput()->with('mess', 'Validate thành công');
    }
    return redirect(route('demo-response'))->with('mess', 'Validate không thành công');
});

Route::get('/lay-thong-tin', [HomeController::class, 'getArr']);

Route::get('/demo-response2', function (Request $request) {
    //return $request->cookie('unicode');
});

Route::get('/demo-res', function () {
    //return view('clients.demo-test');
    $response = response()->view('clients.demo-test', [
        'title' => 'Học http response'
    ], 201)->header('Content-Type', 'application/json');
    return $response;
});

Route::get('download-image', [HomeController::class, 'downloadImage'])->name('download-image');

Route::get('download-doc', [HomeController::class, 'downloadDoc'])->name('download-doc');

//Người dùng
Route::prefix('users')->group(function(){
    Route::get('/',[UsersController::class,'index']);
});
