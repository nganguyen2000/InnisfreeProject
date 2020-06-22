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
        <form action="{{'/user/index/'.$user->id}}" method="post" enctype="multipart/form-data">
             @csrf
             @method("PATCH")
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="username" name="username" value="{{$user->username}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" placeholder="password" name="password" value="{{$user->password}}">
            </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" placeholder="name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="role">role</label>
                <input type="text" class="form-control" placeholder="role" name="role" value="{{$user->role}}">
            </div>
            <button type="submit" class="btn-outline-info">
                Edit
            </button>

        </form>
        
    </div>
    
</body>
</html>