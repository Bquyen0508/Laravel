<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study PHP with unicode</title>
</head>

<body>
    <h1>Home page</h1>
    <h2>{{!empty(request()->keyword)?request()->keyword:"Không có gì"}}</h2>
    <div class="container">
        {!! !empty($content)?$content:false !!}
    </div>
    <hr>
    <!-- @for ($i=1; $i<=10; $i++) 
    <p>Phần tử thứ: {{$i}}</p>
    @endfor -->

    <!-- @while ($index<=10)
    <p>Phần tử thứ: {{$index}}</p>
    <?php $index++ ?>
    @endwhile -->

    <!-- @foreach ($dataArr as $key => $item)
        <p>Phần tử: {{$item}} - {{$key}}</p>
    @endforeach -->

    @forelse ($dataArr as $item)
        <p>Phần tử: {{$item}}</p>
    @empty
        <p>Không có phần tử nào</p>
    @endforelse
</body>

</html>