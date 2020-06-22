<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innissfree</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
   <div class="container">
     @include("partials\header")
    <div>
        <ul class="menu">
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Dưỡng ẩm</a></li>
            <li><a href="">Mặt nạ</a></li>
            <li><a href="">Giới thiệu</a></li>    
        </ul>
    </div>
    <h1 class="title">Innissfree</h1>
    <div class="sanpham">
        @foreach($products as $products)
            <div class="sanpham-khung">
            <img src="{{'/storage/'.$products->image}}" alt="" width="300" height="300">
            <div>
                <p>{{$products->price}}</p>
                <p>{{$products->oldPrice}}</p>
            </div>
            <div>
                <button>Mua</button>
                <button>Chi tiết</button>
            </div>
            </div>
        @endforeach
    </div>
   </div> 
    
    
</body>
</html>