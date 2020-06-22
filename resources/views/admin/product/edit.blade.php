<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        @include('partials.header')
        <form action="{{'/product/index/'.$product->id}}" method="post" enctype="multipart/form-data">
             @csrf
             @method("PATCH")
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" placeholder="ten san pham" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="password">Giá sản phẩm</label>
                <input type="text" class="form-control" placeholder="gia san pham" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="name">Giá cũ</label>
                <input type="text" class="form-control" placeholder="gia cu" name="oldPrice" value="{{$product->oldPrice}}">
            </div>
            <div class="form-group">
                <label for="detail">Chi tiết</label>
                <input type="text" class="form-control" placeholder="chi tiet" name="detail" value="{{$product->detail}}">
            </div>
            <div class="form-group">
                <label for="image">Ảnh</label>
                <input type="file" class="form-control" placeholder="hinh anh" name="image" value="{{$product->image}}">
            </div>
            <button type="submit" class="btn-outline-info">
                Edit
            </button>

        </form>
        
    </div>
    
</body>
</html>