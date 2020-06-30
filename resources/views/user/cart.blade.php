<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        <h1 class="title">Your cart</h1>
            <a href="/home">back</a>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>Name product</th>
                        <th>Image</th>
                        <th>Old Price</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total=0 ?>
                    @foreach ($carts as $item)
                        <tr>
                            @foreach ($item->products as $product)
                                <td>{{$product->name}}</td>
                                <td><img src="{{'/storage/'.$product->image}}" alt="" height="100px" width="100px"></td>
                                <td>{{$product->oldPrice}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                <form action="{{'/cart/update/'.$product->id}}" method="POST">
                                        @csrf
                                        <div class="flex">
                                            <button type="submit" name="plus">+</button>
                                            <input class="sl" type="number" name="quantity" value="{{$item->quantity}}">
                                            <button type="submit" name="minus">-</button>
                                        </div>
                                    </form>
                                </td>
                                <td>{{$item->quantity*$product->price}}</td>
                                <?php $total+=$item->quantity*$product->price?>
                                
                                <td>
                                    <form action="{{'/cart/index/'.$product->id}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>

                            @endforeach
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex1">
                <div class="item1">
                    <p>Total price: <?php echo $total?>  </p>
                </div>
                <div class="item2">
                    <form action="/cart/order" method="GET">
                        @csrf
                        <button class="btn btn-warning" type="submit">Order</button>
                    </form>
                </div>
               
            </div>
            
       
    <div class="ft">
        @include('partials.footer')
    </div>
    
    </div>
</body>
</html>
