<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        <h1>Your cart</h1>
            <a href="/home">back</a>
            <table class="table table-light">
                <thead class="thead-light">
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
                                <td>{{$item->quantity}}</td>
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
                <tfoot>
                    <tr>
                        <th>Total price: <?php echo $total?></th>  
                        
                    </tr>
                    <tr>
                    <td>
                        
                    </td>
                    </tr>
                </tfoot>
            </table>
     
    </div>
</body>
</html>
