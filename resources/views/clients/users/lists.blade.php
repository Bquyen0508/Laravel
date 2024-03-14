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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th width="15%">Thời gian</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($users))
                    @foreach ($users as $key => $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->fullname}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->create_at}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan = "4">Không có người dùng</td>
                    </tr>
                @endif
            </tbody>
        </table>
    @endsection

</body>

</html>
