<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión - Dueño</h1>
    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="POST" action="{{ route('login-duenio') }}">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>

        <label for="contrasenia">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" required>

        <button type="submit">Iniciar Sesión</button>
    </form>

    <a href="../">Volver al menú principal</a>
</body>
</html>
