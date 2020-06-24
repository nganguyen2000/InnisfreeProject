<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innissfree</title>
    <link rel="stylesheet" href="/css/home.css">
    <style type="text/css">
        .sanpham-khung {
            background-color: white;
            border: 1px 2 solid green;
        }
    </style>
</head>
<body>
   <div class="container">
     @include("partials\header")
    
    <h1 class="title">Innissfree</h1>
    <div class="sanpham">
        @foreach($products as $product)
            <div class="sanpham-khung">
            <img src="{{'/storage/'.$product->image}}" alt="" width="200" height="200">
            <div class="price">
                <p class="olpr">{{$product->getDisplayPrice()}}</p>
                <p class="pr">{{$product->getDisplayOldPrice()}}</p>
            </div>
            <div>
                <button>Mua</button>
            <form action="{{'/home/detail/'.$product->id}}" method="GET">
                    <button type="submit">Chi tiết</button>
            </form>
                
            </div>
            </div>
        @endforeach
    </div>
   </div> 
    
    
</body>
</html>