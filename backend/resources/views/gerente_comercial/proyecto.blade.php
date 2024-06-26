<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos - {{ $gerente_comercial->nombre }}</title>
    <!-- Agrega tus estilos CSS aquí -->
</head>

<body>
    <div class="sidebar">
        <h3>Menú Lateral</h3>
        <ul>
            <li class="menu-item"><a href="/gerente_comercial/dashboard">Inicio</a></li>
            <li class="menu-item"><a href="#">Gestión de Proyecto</a></li>
            <li class="menu-item"><a href="#">Gestión de Inmueble</a></li>
            <li class="menu-item"><a href="#">Gestión de Personal</a></li>
            <li class="menu-item"><a href="#">Gestión de Metas</a></li>
            <li class="menu-item"><a href="#">Gestión de Reportes</a></li>
            <li class="menu-item"><a href="#">Gestión Solicitud de financiamiento</a></li>
            <li class="menu-item"><a href="/gerente_comercial/miperfil">Mi Perfil</a></li>
            <li class="menu-item"><a href="/gerente_comercial/login">Cerrar Sesion</a></li>
        </ul>
        <!-- Menú Lateral -->
        <!-- ... (mismo código que en el archivo original) -->
    </div>
    <div class="main-content">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; width: 100%;">
            <!-- Primera columna: Listado de Proyectos -->
            <div style="flex: 1; padding-right: 20px;">
                <h1>Listado de Proyectos</h1>
                <!-- Agrega aquí un formulario o sección para buscar y agregar proyectos -->
                <!-- Ejemplo: -->

                <!-- Campos para agregar proyectos -->
                <input type="text" name="buscar_proyecto" id="buscarProyecto" placeholder="Nombre del Proyecto">

                <!-- ... Otros campos para agregar proyectos ... -->
                <a href="{{ route('gerente_comercial_mostrarFormProyecto') }}">Agregar Proyecto</a>
                <!-- Listado de proyectos asociados al gerente comercial -->
                <ul id="listaProyectos">
                    @foreach ($gerente_comercial->proyectos as $proyecto)
                        <li>
                            <a href="#" class="proyecto-link"
                                data-proyecto-id="{{ $proyecto->id }}">{{ $proyecto->nombre }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Segunda columna: Detalles del Proyecto seleccionado -->
            <div style="flex: 2;">
                <h1>Detalles del Proyecto</h1>
                <!-- Aquí mostrarás los detalles del proyecto seleccionado -->
                <!-- Puedes utilizar la lógica similar a tu otro Blade para mostrar y modificar datos -->
                <!-- Por ejemplo, un formulario para editar los detalles del proyecto -->


                @if (isset($proyecto))
                    <form method="POST" action="{{ route('gerente_comercial_guardar_Proyecto') }}">
                        @csrf
                        <!-- Campos para editar detalles del proyecto -->
                        <input type="text" name="id_proyecto" value="{{ $proyecto->id }}" hidden>
                        <label for="nombre">Nombre </label>
                        <input type="text" name="nombre_proyecto" value="{{ $proyecto->nombre }}">
                        <label for="id_categoria_proyecto">Categoría del Proyecto:</label>
                        <select id="id_categoria_proyecto" name="id_categoria_proyecto" required>
                            @foreach ($categorias_proyectos as $categoria_proyecto)
                                <option value="{{ $categoria_proyecto->id }}"
                                    {{ $proyecto->id_categoria_proyecto == $categoria_proyecto->id ? 'selected' : '' }}>
                                    {{ $categoria_proyecto->nombre }}
                                </option>
                            @endforeach
                        </select>
                        <label for="nombre">Departamento </label>
                        <input type="text" name="departamento_proyecto" value="{{ $proyecto->departamento }}">
                        <label for="nombre">Ciudad </label>
                        <input type="text" name="ciudad_proyecto" value="{{ $proyecto->ciudad }}">
                        <label for="nombre">Direccion </label>
                        <input type="text" name="direccion_proyecto" value="{{ $proyecto->direccion }}">
                        <label for="nombre">Fecha inicio </label>
                        <input type="date" name="fecha_inicio_proyecto" value="{{ $proyecto->fecha_inicio }}">
                        <!-- ... Otros campos para editar detalles del proyecto ... -->
                        <button type="submit">Guardar Cambios</button>
                        <!-- Puedes agregar un botón para eliminar el proyecto -->
                        <!-- Ten en cuenta la seguridad y confirma la eliminación con un modal o similar -->
                    </form>
                @else
                    <p>No has seleccionado un proyecto.</p>
                @endif
            </div>
        </div>
    </div>


    <!-- Agrega tus scripts JavaScript aquí -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.proyecto-link').click(function(event) {
                event.preventDefault(); // Evitar la acción predeterminada del enlace

                var proyectoId = $(this).data('proyecto-id');

                // Realizar una solicitud AJAX para obtener los detalles del proyecto
                $.ajax({
                    url: '/obtener-proyecto/' + proyectoId,
                    method: 'GET',
                    success: function(response) {
                        // Actualizar los valores de los campos del formulario
                        $('input[name="id_proyecto"]').val(response.id);
                        $('input[name="nombre_proyecto"]').val(response.nombre);
                        $('select[name="id_categoria_proyecto"]').val(response.id_categoria_proyecto);
                        $('input[name="departamento_proyecto"]').val(response.departamento);
                        $('input[name="ciudad_proyecto"]').val(response.ciudad);
                        $('input[name="direccion_proyecto"]').val(response.direccion);
                        $('input[name="fecha_inicio_proyecto"]').val(response.fecha_inicio);
                        // ... Actualizar otros campos según sea necesario ...
                    },
                    error: function(xhr, status, error) {
                        console.error('Error al obtener el proyecto:', error);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#buscarProyecto').on('input', function() {
                var term = $(this).val().trim().toLowerCase();

                $('#listaProyectos li').each(function() {
                    var proyectoNombre = $(this).text().trim().toLowerCase();
                    var proyectoVisible = proyectoNombre.includes(term);

                    $(this).toggle(proyectoVisible);
                });
            });
        });
    </script>



</body>

</html>
