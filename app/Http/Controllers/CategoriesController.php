<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request)
    {
        if ($request->is('categories')) {
            echo '<h3>This is home page</h3>';
        }
    }
    //Hiển thị danh sách chuyên mục (phương thức get)
    public function index(Request $request)

    {
        // $allData = $request->all();
        // dd($allData);

        // $url = $request->url();
        // echo $url;

        // if($request->isMethod('GET')){
        //     echo 'GET method';
        // }

        // $id = $request->input('id');
        // echo $id;

        // $fullUrl = $request->fullUrl();
        // echo $fullUrl;

        // $id = $request->id;
        // $name = $request->name;
        // dd($name);

        $name = request('name','default value');
        dd($name);
        return view('clients/categories/list');
    }
    //lấy ra 1 chuyên mục theo id(pt get)
    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }
    //sửa 1 chuyên mục (phương thức post)
    public function updateCategory($id)
    {
        return 'Submit sửa chuyên mục ' . $id;
    }
    //show form thêm dữ liệu
    public function showCategory()
    {
    }
    //thêm dữ liệu vào chuyên mục (phương thức get)
    public function addCategory(Request $request)
    {
        $path = $request->path();
        echo $path;
        return view('clients/categories/add');
    }
    //thêm dữ liệu vào chuyên mục (phương thức post)
    public function handleAddCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        if ($request->isMethod('POST')) {
            echo 'POST method';
        }
        //return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
    }
    //xóa dữ liệu pt delete
    public function deleteCategory($id)
    {
        return 'Submit xóa chuyên mục ' . $id;
    }
}
