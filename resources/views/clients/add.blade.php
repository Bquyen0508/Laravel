<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title> unicode </title> --}}
</head>

<body>
    @extends('layouts.client')
    {{-- @section('content')
        <h1>Home page</h1>
    @endsection --}}

    @section('title')
        {{$title}}
    @endsection

    @section('content')
        <section>
            <h1>Thêm sản phẩm</h1>
           <form action="" method="post">
                <input type="text" name="username">
                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                <button type="submit">Submit</button>
                @csrf
                @method('PUT')
           </form>
        </section>
    @endsection

</body>
</html>