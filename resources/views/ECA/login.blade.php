<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cabecera.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <h1>Sistema de login</h1>
    
        <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="user" required></p>
    
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password" required></p>
    
        <input type="submit" value="Ingresar">
    </form>
    
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
    

</body>
</html>
