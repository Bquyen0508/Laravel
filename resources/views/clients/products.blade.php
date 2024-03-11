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
        @if (session('mgs'))
            <div class="alert alert-success">
                {{ session ('mgs')}}
            </div>
        @endif
        <h1>Sản phẩm</h1>
    @endsection

    @push('scripts')
        <script>
            console.log('push lần 2');
        </script>
    @endpush

    @section('css')
    @endsection

    @section('js')
    @endsection

    @prepend('scripts')
        <script>
            console.log('push lần 1');
        </script>
    @endprepend
</body>

</html>
