<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="/css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    

</style>
<body>
    <div class="container">
        <div class="first">
            <div class="first_1"><img width="170px" height="100px" src="/img/logo_innisfree.png" alt=""></div>
            <div class="first_2">
                <form class="example" action="/action_page.php">
                    <div><input type="text" placeholder="Search.." name="search" ></div>
                    <div><i class="fas fa-search"></i></div>
                </form>
            </div>
            <div class="firs_3">
                @if(Auth::user())
                    <form action="/auth/logout" method="post" class="btio">
                        @csrf
                        <button type="submit" class="btLog">Logout</button>
                    </form>
                @else
                    <form action="/auth/login" method="post" class="btio">
                        @csrf
                        <button type="submit" class="btLog">LOGIN</button>
                    </form>
                @endif

            </div>
        </div>
       
    </div>
    
</body>
</html>