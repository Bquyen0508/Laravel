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

        // $id = $request->query('id');
        // dd($id);

        // $query = $request->query();
        // dd($query);

        // $name = request('name','default value');
        // dd($name);
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
        // $path = $request->path();
        // // echo $path;
        // $cateName = $request->old('category_name');
        return view('clients/categories/add');
    }
    //thêm dữ liệu vào chuyên mục (phương thức post)
    public function handleAddCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        // if ($request->isMethod('POST')) {
        //     echo 'POST method';
        // }
        //return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
        if ($request->has('category_name')) {
            $cateName = $request->category_name;
            $request->flash(); //set session flash
        } else {
            return 'Không có category';
        }
    }
    //xóa dữ liệu pt delete
    public function deleteCategory($id)
    {
        return 'Submit xóa chuyên mục ' . $id;
    }

    public function getFile()
    {
        return view('clients/categories/file');
    }

    //Xử lý lấy thông tin file
    public function handleFile(Request $request)
    {
        if ($request->hasFile('photo')) {
            if ($request->photo->isValid()) {
                $file = $request->photo;
                // $path = $file->path();
                $ext = $file->extension;
                // $path = $file->store('images','local');
                // $path = $file->storeAs('images', 'khoa-hoc.txt');
                //dd($path);

                // $fileName = $file->getClientsOriginalName();
                
                //Đổi tên
                $fileName = md5(uniqid()) . '.' . $ext;
                dd($fileName);
            } else {
                return 'upload không thành công';
            }
        } else {
            return 'Vui lòng chọn file';
        }
    }
}
