<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Panel de Control</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/gerente_comercial/dashboard">Inicio</a></li>
            <li><a href="/gerente_comercial/miperfil">Mi Perfil</a></li>
            <li><a href="/gerente_comercial/logout">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <main>
        <h2>Bienvenido, {{session('nombre')}}</h2>
        <p>Este es tu panel de control. Puedes navegar por las diferentes secciones del sistema aquí.</p>
        <!-- Contenido específico del panel de control -->

        <h2>Proyectos</h2>
        <a href="/gerente_comercial/proyecto">AgregarProyecto</a>
        <!-- Contenido específico del panel de control -->
    </main>
    <footer>
        <p>&copy; 2023 - Lotizen</p>
    </footer>
</body>
</html>
