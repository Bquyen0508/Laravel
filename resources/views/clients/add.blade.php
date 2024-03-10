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
        {{ $title }}
    @endsection

    @section('content')
        <section>
            <h1>Thêm sản phẩm</h1>
            <form action="" method="post">
                @error('mgs')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Tên sản phẩm..."
                        value={{ old('product_name') }}>
                    @error('product_name')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Gía sản phẩm</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Gía sản phẩm..." value={{ old('product_price') }}>
                    @error('product_price')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                @csrf
            </form>
        </section>
    @endsection

</body>

</html>
