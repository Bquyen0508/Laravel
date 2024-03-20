<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }

    public function index()
    {
        $title = 'Danh sách người dùng';
        $users = new Users();
        $usersList = $users->getAllUsers();
        return view('clients.users.lists', compact('title', 'usersList'));
    }

    public function add()
    {
        $title = 'Thêm người dùng';
        return view('clients.users.add', compact('title'));
    }

    public function postAdd(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique:users',
        ], [
            'fullname.required' => 'Họ và tên bắt buộc phải nhập',
            'fullname.min' => 'Họ và tên bắt buộc phải từ :min ký tự trở lên',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.required' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
        ]);

        $dataInsert = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s')
        ];
        $this->users->addUser($dataInsert);
        return redirect()->route('users.index')->with('mgs','Thêm người dùng thành công');
    }
}
