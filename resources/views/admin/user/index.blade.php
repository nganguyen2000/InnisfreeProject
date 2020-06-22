<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/admin/user.css">
</head>
<body>
    <div class="container"> 
        @include('./partials/header')
        <h1 class="title">Danh Sách Người Dùng</h1>
        <div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($users as $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->username}}</td>
                        <td>{{$users->password}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->role}}</td>
                        <td>
                            <form action="{{'/user/index/'.$users->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btd">Delete</button>

                            </form>
                        </td>
                        <td>
                            <form action="{{'/user/index/'.$users->id.'/edit'}}" method="GET">
                                @csrf
                                <button type="submit" class="bte">Edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>

                </tr>

            </table>
        </div>
   </div>
</body>
</html>