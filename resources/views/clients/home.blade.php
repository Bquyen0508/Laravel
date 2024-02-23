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
            @include('clients.contents.slide')
            @include('clients.contents.about')
        </section>
    @endsection

    @section('css')
        
    @endsection

    @section('js')
        
    @endsection
    {{-- <h1>Home page</h1>
    <h2>{{!empty(request()->keyword)?request()->keyword:"Không có gì"}}</h2>
    <div class="container">
        {!! !empty($content)?$content:false !!}
    </div>
    <hr> --}}
    {{--  @for ($i=1; $i<=10; $i++) 
    <p>Phần tử thứ: {{$i}}</p>
    @endfor --}}

    {{--  @while ($index<=10)
    <p>Phần tử thứ: {{$index}}</p>
    <?php $index++ ?>
    @endwhile --}}

    {{-- @foreach ($dataArr as $key => $item)
        <p>Phần tử: {{$item}} - {{$key}}</p>
    @endforeach --}}

    {{-- @forelse ($dataArr as $item)
        <p>Phần tử: {{$item}}</p>
    @empty
        <p>Không có phần tử nào</p>
    @endforelse --}}

    {{-- @php
    $number = 5;
    if($number >= 10){
        $total = $number + 20;
    }else{
        $total = $number + 10;
    }
    @endphp
    <h3>Kết quả: {{$number}} - {{$total}}</h3>

    @verbatim
        <div class="container">
            Hello, {{className}}
        </div>
        <script>
            Hello, {{name}}
            Hi, {{age}}
        </script>
    @endverbatim
    @include('parts.notice') --}}
</body>
</html>