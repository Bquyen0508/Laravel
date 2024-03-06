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
        trang chu
    @endsection

    @section('sidebar')
        @parent
        <h3>Home sidebar</h3>
    @endsection

    @section('content')
        <section>
            <h1>Trang chủ</h1>
            @datetime('2024-25-02 15:01:00')
            @include('clients.contents.slide')
            @include('clients.contents.about')

            @env('production')
            <p>Môi trường production</p>
            @elseenv('test')
            <p>Môi trường test</p>
        @else
            <p>Môi trường dev</p>
            @endenv

            <x-alert type="info" :content="$message" data-icon='youtube' />
            {{-- 
            <x-inputs.button/>

            <x-forms.button/> --}}

            <p><img src="https://www.niijiiradio.com/wp-content/uploads/2016/10/News-Image-3.jpg" alt=""></p>

            <p><a href="{{ route('download-image') . '?image=' . public_path('storage\5.jpg') }}" class="btn btn-primary">Download ảnh</a>
            </p>

            <p><a href="{{ route('download-doc') . '?file=' . public_path('storage\PB1-SapotaCorp.pdf') }}" class="btn btn-primary">Download file pdf</a>
            </p>
        </section>
    @endsection

    @section('css')
        <style>
            img {
                max-width: 100%;
                height: auto;
            }
        </style>
    @endsection

    @section('js')
    @endsection

</body>

</html>
