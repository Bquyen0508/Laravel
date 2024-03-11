<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public $data = [];
    public function index()
    {

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

        return view('clients.home', $this->data);
    }

    public function products()
    {
        $this->data['title'] = 'Sản phẩm';
        return view('clients.products', $this->data);
    }

    public function getAdd()
    {
        $this->data['title'] = 'Thêm sản phẩm';
        $this->data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu';
        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request)
    {
        $rules = [
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer'
        ];

        // $messages = [
        //     'product_name.required' => 'Tên sản phẩm bắt buộc phải nhập',
        //     'product_name.min' => 'Tên sản phẩm không được nhỏ hơn :min ký tự',
        //     'product_price.required' => 'Gía sản phẩm bắt buộc phải nhập',
        //     'product_price.integer' => 'Gía sản phẩm phải là số'
        // ];
        $messages = [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'integer' => ':attribute phải là số'
        ];

        $attributes = [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Gía sản phẩm',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        //$validator->validate();

        if($validator->fails()){
            $validator->errors()->add('mgs','Vui lòng kiểm tra lại dữ liệu');
        }else{
            return redirect()->route('product')->with('mgs','Validate thành công');
        }

        return back()->withErrors($validator);

        // $request->validate($rules, $messages);
       
        //Xử lý thêm dữ liệu vào database

    }

    public function putAdd(Request $request)
    {
        return 'Phương thức PUT';
        dd($request);
    }

    public function getArr()
    {
        $contentArr = [
            'name' => 'Laravel 8x',
            'lesson' => 'Unicode',
            'class' => 'PNV25A'
        ];
        return $contentArr;
    }

    public function downloadImage(Request $request)
    {
        if (!empty($request->image)) {
            $image = trim($request->image);

            $fileName = 'image_' . uniqid() . '.jpg';

            // $fileName = basename($image);

            // return response()->streamDownload(function() use ($image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // }, $fileName);

            return response()->download($image, $fileName);
        }
    }

    public function downloadDoc(Request $request)
    {
        if (!empty($request->file)) {
            $file = trim($request->file);

            $fileName = 'tai-lieu_' . uniqid() . '.pdf';

            $header = [
                'Content-Type => application/pdf'
            ];
            return response()->download($file, $fileName, $header);
        }
    }
}
