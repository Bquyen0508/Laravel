<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return 'Home';
    }
    public function getPosts(){
        return 'Danh sách post';
    }

    public function getCategories($id){
        return "chuyên mục: ".$id;
    }
}
