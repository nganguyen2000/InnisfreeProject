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
        <div class="flex">
            <div class="all_detail">

                <div class="image_detail" style="">
                    <img src="{{'/storage/'.$product->image}}"  alt="" width="300" height="300">
                </div>
               
    
                <div class="detail">
                    <h4>{{$product->name}}</h4>
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p><b>Capacity:</b> {{$detail->capacity}}ml</p>
                    <p><b>Origin: </b>{{$detail->origin}}</p>
                    <p>{{$detail->content}}</p>
                    <div class="button_box">
                        <div class="button_item">
                            <form action="">
                                <button class="add" type="submit">Add to cart</button>
                            </form>
                        </div>
                        <div class="button_item" >
                            <form action="">
                                <button>Back</button>
                            </form>
                        </div>
                       
                    </div>
                   
                </div>

            </div>
           
            
        </div>
    </div>
</body>
</html>