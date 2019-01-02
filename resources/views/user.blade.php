<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios</title>
</head>
<body>
    <div class="container"><h1>{{$title}}</h1>
        <hr>
        <ul>
         @if (!empty($users))  
            @foreach ($users as $user)
                <li>{{$user}}</li>
            @endforeach
         @else
         <p>NO hy usuarios registrados</p>
        @endif

        </ul>
    </div>
</body>
</html>