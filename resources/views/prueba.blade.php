<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    @auth
    <p> El usuario está autenticado</p>
    @endauth
    @guest
    <p> El usuario no está autenticado</p>
    @endguest

    {{$titulo}} {{-- Ponemos ! delante y detras de lo que pasemos por las llaves para que no se haga el specialchars --}}
</body>
</html>
