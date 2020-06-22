<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        @include('partials/header')
        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <!-- Links -->
            <ul class="navbar-nav">
                 <li class="nav-item">
                     <form action="">
                         <button class="btn btn-primary button" >Home</button>
                     </form>
                </li>
                <li class="nav-item">
                     <form action="/admin/user/index" method ="POST">
                        @csrf
                         <button class="btn btn-primary button" type="submit">User</button>
                     </form>
                </li>
                <li class="nav-item">
                <form action="/admin/product/index" method ="get">
                        @csrf
                         <button class="btn btn-primary button" type="submit">Product</button>
                     </form>
                </li>
            </ul>

            <!-- Navbar text-->
         </nav>
        <h1 class="title">Welcome Admin</h1>
    </div>
</body>
</html>