<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/detail.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail product</title>
</head>
<body>
    <div class="container">
        @include("partials\header")
        <h1>Detail Product</h1>
        <div>
            <img src="{{'/storage/'.$product->image}}"  alt="">
            <p>{{$product->name}}</p>
            <p>Dung tích: {{$detail->capacity}}ml</p>
            <p>Xuất xứ:{{$detail->origin}}</p>
            <p>{{$detail->content}}</p>


        </div>
    </div>
</body>
</html>