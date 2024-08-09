
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Home</title>
</head>
<body>
    <div>
        <h1 class="bienvenida">Bienvenido </h1>
        <div>
            <p>Nombre: {{ $user ->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Edad: {{ $user->age }}</p>
            <p>Direccion: {{ $user->address }}</p>
            <p>Codigo postal: {{ $user->zip_code }}</p>
        </div>
        <div class="buttons">
                <a href="list_user">
                    <button>Ver usuarios</button>
                </a><br><br>
                <form  action="{{ route('logout') }}">
                        <button type="submit">Salir</button>
                </form>
        </div>
    </div>
</body>
</html>

