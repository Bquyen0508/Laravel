<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
    }
    //Hiển thị danh sách chuyên mục (phương thức get)
    public function index()
    {
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
        return 'Submit sửa chuyên mục '.$id;
    }
    //show form thêm dữ liệu
    public function showCategory()
    {
    }
    //thêm dữ liệu vào chuyên mục (phương thức get)
    public function addCategory()
    {
        return view('clients/categories/add');
    }
    //thêm dữ liệu vào chuyên mục (phương thức post)
    public function handleAddCategory()
    {
        return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
    }
    //xóa dữ liệu pt delete
    public function deleteCategory($id)
    {
        return 'Submit xóa chuyên mục '.$id;
    }
}
