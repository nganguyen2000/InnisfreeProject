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
    <style>
    .title{
        color:pink;
        text-align:center;
    }
    </style>
</head>
<body>
    <h1 class="title">Register</h1>
    <div class="container">
        <form action="/auth/register" method="POST">
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
                    <label for="username"> User name</label>
                    <input type="text" placeholder="username" name="username" class="form-control" value="{{old('username')}}">
                </div>
                <div class="form-group">
                    <label for="password">PassWord</label>
                    <input type="password" placeholder="password" name="password" class="form-control" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" placeholder="name" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="email" name="email" class="form-control" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="Role">role</label>
                    <select class="form-control" name="role">
                        <option value="user" selected>User</option>
                    </select>
                </div>
                <div class="btn-box">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>

        </form>
    </div>
</body>
</html>