<html>

<head>
    <title>Nuevo Proyecto</title>
</head>

<body>
    <h1>Crear Nuevo Proyecto</h1>

    <!-- Formulario para ingresar un nuevo proyecto -->
    <form method="POST" action="{{ route('duenio_agregarProyecto') }}">
        @csrf <!-- Token de seguridad CSRF -->
        <!-- Campo para el nombre del proyecto -->
        <label for="nombre">Nombre del Proyecto:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <!-- Campo para la categoría del proyecto -->
        <label for="id_categoria_proyecto">Categoría del Proyecto:</label>
        <select id="id_categoria_proyecto" name="id_categoria_proyecto" required>
            @foreach ($categorias_proyectos as $categoria_proyecto)
                <option value="{{ $categoria_proyecto->id }}">{{ $categoria_proyecto->nombre }}</option>
            @endforeach
        </select>
        <br>

        <!-- Campo para el departamento -->
        <label for="departamento">Departamento:</label>
        <input type="text" id="departamento" name="departamento">
        <br>

        <!-- Campo para la ciudad -->
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad">
        <br>

        <!-- Campo para la dirección -->
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion">
        <br>

        <!-- Campo para la fecha de inicio -->
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required>
        <br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Crear Proyecto</button>
    </form>
</body>

</html>
