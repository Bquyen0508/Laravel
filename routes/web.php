<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
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
Route::post('/them-san-pham', [HomeController::class, 'postAdd']);
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);

Route::get('demo-response', function () {
    // $response = new Response('',200);
    $content = json_encode([
        'Item 1',
        'Item 2',
        'Item 3'
    ]);
    $response = (new Response($content))->header('Content-Type', 'application/json');
    // return $response;

    $newResponse = (new Response())->cookie('unicode', 'training PHP', 30);
    return $newResponse;
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
