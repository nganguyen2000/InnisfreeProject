<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="/css/admin/create.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            @include('admin/dashboard')
        </div>
        <h2 class="title">Thêm sản phẩm</h2>
        <form action="/admin/product/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name"><b>Tên sản phẩm</b></label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="oldeprice"> <b>Giá cũ</b> </label>
                            <input type="text" name="oldPrice" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price"><b>Giá sản phẩm</b></label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                             <input type="number" name="quantity" class="form-control">
                          </div>
                        
                        
                  </div>
                  <div class="col-sm-6">
                        <div class="form-group">
                            <label for="capacity"> <b>Dung tích</b> </label>
                            <input type="number" name="capacity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content"> <b>Chi tiết</b></label>
                            <input type="text" name="content" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Loại</label>
                            <select class="form-control" name="category">
                              @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                       </div>
                       <div class="form-group">
                           <label for="origin"><b>Xuất xứ</b></label>
                           <select name="origin" class="form-control">
                               <option value="Korean">Korean</option>
                               <option value="USA">USA</option>
                               <option value="UK">UK</option>
                               <option value="Australia">Australia</option>
                               <option value="Japan">Japan</option>
                           </select>

                       </div>
                       
                  </div>
                 
            </div>
            <div class="form-group">
                <label for="image"><b>Ảnh</b></label>
                <input type="file" name="image" class="form-control">
             </div>
           
           
            <button type="submit" class="btn btn-primary">
                Thêm
            </button>
        </form>
    </div>
    
</body>
</html>