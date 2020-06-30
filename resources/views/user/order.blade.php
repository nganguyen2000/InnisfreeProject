<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.h1{
  text-align: center;
  color: green;
}
</style>
</head>
<body>

<div>
    <h1 class="h1">Payment</h1>
    <div class="row" style="">
        
        <div class="container" style="width: 1200px; margin-left:150px;">
            
        <form action="/pay" method="POST">
            @csrf
            <div class="row">
            <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" name="fullName" placeholder="your name">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" name="email" placeholder="your email">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" name="address" placeholder="542 W. 15th Street">
                <label for="phone"><i class="fa fa-phone"></i> Phone number</label>
                <input type="text" name="phone" placeholder="your phone number">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" name="city" placeholder="Da Nang">
            </div>
            <div class="col-50">
                <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
                <div>
                  <table border="1">
                    <tr> 
                      <th>name</th>
                      <th>image</th>
                      <th>price</th>
                      <th>quantity</th>
                      <th>total price</th>
                    </tr>
                    <?php $total=0;?>
                    @foreach( $carts as $item)
                    <tr>
                      @foreach($item->products as $product)
                    <td>{{$product->name}}</td>
                    <td><img src="{{'/storage/'.$product->image}}" alt="" height="100px" width="100px"></td>
                    <td>{{$product->price}}</td>
                    <td>x{{$item->quantity}}</td>
                    <td>{{$item->quantity*$product->price}}</td>
                    <?php $total +=$item->quantity*$product->price ?>
                      @endforeach
                    </tr>
                    @endforeach
                  </table>
                </div>
               
                <hr>
              <p>Total <span class="price" style="color:black"><b><?php echo $total;?></b></span></p>
                </div>
            </div>
            
            
            </div>
            
              <button type="submit" class="btn">Pay</button>
           
            
        </form>
        </div>
    
    
    </div>
</div>
</body>
</html>
