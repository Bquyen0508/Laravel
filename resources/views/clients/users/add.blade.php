<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title> unicode </title> --}}
</head>

<body>
    @extends('layouts.client')

    @section('title')
        {{ $title }}
    @endsection

    @section('content')
        @if (session('mgs'))
            <div class="alert alert-success">
                {{ session('mgs') }}
            </div>
        @endif
        <h1> {{ $title }} </h1>

        @if ($errors->any())
            <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ. Vui lòng nhập lại</div>
        @endif
        <form action="" method='POST'>
            <div class="mb-3">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="fullname" placeholder="Họ và tên...">
                @error('fullname')
                    <span style='color:red'>{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email...">
                @error('email')
                    <span style='color:red'>{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{route('users.index')}}" class='btn btn-warning'>Quay lại</a>
            @csrf
        </form>
    @endsection

</body>

</html>
