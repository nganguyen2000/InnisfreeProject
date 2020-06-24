<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/admin/user.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Product</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        <h1 class="title">Management Products</h1>
        <div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Giá cũ</th>
                    <th>Hình ảnh</th>
                    <th>Chi tiết</th>
                    <th>Loại</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($products as $products)
                    <tr>
                        <td>{{$products->id}}</td>
                        <td>{{$products->name}}</td>
                        <td>{{$products->getDisplayPrice()}}</td>
                        <td>{{$products->getDisplayOldPrice()}}</td>
                        <td> <img src="{{'/storage/'.$products->image}}" alt="" height="150px" width="150px"></td>
                        <td>
                            @foreach($details as $detail)
                                @if($products->id==$detail->product_id)
                                    {{$detail->content}}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($categories as $category)
                                @if($products->category_id == $category->id)
                                 {{$category->name}}
                                 @endif
                             @endforeach
                        </td>
                        <td>
                            <form action="{{'/product/index/'.$products->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btd">Delete</button>

                            </form>
                        </td>
                        <td>
                            <form action="{{'/product/index/'.$products->id.'/edit'}}" method="GET">
                                @csrf
                                <button type="submit" class="bte">Edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>

                </tr>

            </table>
        </div>
        <form action="/admin/product/create" method="get">
            @csrf
            <button type="submit" class="add">
            Thêm sản phẩm
            </button>
        </form>
        
    </div>
    

</body>
</html>