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

            <x-alert type="info" :content="$message" data-icon='youtube'/>
{{-- 
            <x-inputs.button/>

            <x-forms.button/> --}}
            
        </section>
    @endsection

    @section('css')
    @endsection

    @section('js')
    @endsection

</body>

</html>
