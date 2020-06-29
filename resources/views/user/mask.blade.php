<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mask</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        <div class="sanpham">
            @foreach($products as $product)
                <div class="sanpham-khung">
                    <img src="{{'/storage/'.$product->image}}" alt="" width="200" height="200">
                    <div>
                        <p><b>{{$product->name}}</b></p>
                    </div>
                    <div class="price">
                        <p class="olpr">{{$product->getDisplayPrice()}}</p>
                        <p class="pr">{{$product->getDisplayOldPrice()}}</p>
                    </div>
                    <div class="flex">
                        <div class="flex-bt">
                            <form action="{{'/user/add/'.$product->id}}" method="POST">
                                @csrf
                                <button class="btn btn-warning" type="submit">Add to cart</button>
                            </form>
                        </div>
                        <div class="flex-bt">
                            <form action="{{'/home/detail/'.$product->id}}" method="GET">
                                @csrf
                                <button class="btn btn-success" type="submit">Detail</button>
                            </form>
                        </div>
                    
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>