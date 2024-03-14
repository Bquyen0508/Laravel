<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {

        // $users = DB::select('SELECT * FROM users WHERE id > ?',[1]);
        // dd($users);
        
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

    public function postAdd(ProductRequest $request)
    {
        $rules = [
            'product_name' => ['required', 'min:6'],
            'product_price' => 'required|integer'
        ];

        $messages = [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'integer' => ':attribute phải là số'
        ];

        $attributes = [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Gía sản phẩm',
        ];

        // c1
        // $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        // $validator->validate();



        return response()->json(['status' => 'success']);

        // if ($validator->fails()) {
        //     $validator->errors()->add('mgs', 'Vui lòng kiểm tra lại dữ liệu');
        // } else {
        //     return redirect()->route('product')->with('mgs', 'Validate thành công');
        // }

        // return back()->withErrors($validator);

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

    public function isUpperCase($value, $message, $fail)
    {
        if ($value != mb_strtoupper($value, 'UTF-8')) {
            $fail($message);
        }
    }
}
