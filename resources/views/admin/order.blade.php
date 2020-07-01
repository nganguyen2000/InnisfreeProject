<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Information</title>
    <style type="text/css">
        table{
            margin:auto;

        }

    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center; color:green">Order List</h1>
        <table class="table table-light" border="1">
            <thead class="thead-light">
                <tr>
                    <th>User_id</th>
                    <th>name customers</th>
                    <th>name products</th>
                    <th>Image</th>
                    <th>price</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    @foreach($products as $product)
                    <tr>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$product->name}}</td>
                    <td><img src="{{'/storage/'.$product->image}}" alt="" height="150px" width="150px"></td>
                    <td>{{$product->price}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$product->quantity}}</td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>