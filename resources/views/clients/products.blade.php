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
        trang chu
    @endsection
    
    @section('sidebar')
        @parent
        <h3>Product sidebar</h3>
    @endsection

    @section('content')
        <h1>Sản phẩm</h1>
    @endsection

    @section('css')
        
    @endsection

    @section('js')
    @endsection
</body>
</html>