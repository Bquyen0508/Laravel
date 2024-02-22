<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['title'] = 'good mood';

        $this->data['welcome'] = 'Học lập trình Laravel tại Unicode';
        $this->data['content'] = '<h3>Chương 1: Nhập môn Laravel</h3>
        <p>Kiến thức 1</p>
        <p>Kiến thức 2</p>
        <p>Kiến thức 3</p>';

        $this->data['index'] = 1;

        $this->data['dataArr'] = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];

        $this->data['number'] = 10;

        $this->data['message'] = 'order successful';
        
        return view('clients.home',$this->data);
    }

    public function products(){
        $this->data['title'] = 'Sản phẩm';
        return view('clients.products', $this->data);
    }
}
