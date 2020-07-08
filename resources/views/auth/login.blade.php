<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

    
    <div class="khung">
        <h3>Login</h3>
        <form action="/auth/login" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" placeholder="username" class="form_control" name="username" value="{{old('username')}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="password" class="form_control" name="password">
            </div>
            <div>
                <p style="color:red">{{Request::get('error')}}</p>
            </div>
            <div class="btn-box">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
            </div>

        </form>
    </div>
</div>
</body>
</html>