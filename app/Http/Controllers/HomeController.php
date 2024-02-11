<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    //
    public function index(){
        $title = "Study PHP with me!";
        $content = "Learn programming in Laravel";
        // [
        //     'title' => $title,
        //     'content' => $content
        // ];
        return view::make('home', compact('title','content'));//load view home.php
        // $contentView = view('home')->render();
        // $contentView = $contentView->render();
        // dd($contentView);
    }
    public function getPosts(){
        return 'Danh sách post';
    }

    public function getCategories($id){
        return "chuyên mục: ".$id;
    }

    public function getProductDetail($id){
        return view('clients.categories.products.detail', compact('id'));
    }
}
