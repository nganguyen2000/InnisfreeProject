<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="/auth/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" placeholder="username" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" placeholder="password" class="form-control" name="password">
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
    
</body>
</html>