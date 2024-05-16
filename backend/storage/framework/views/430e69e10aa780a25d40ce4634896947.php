<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos - <?php echo e($gerente_comercial->nombre); ?></title>
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
                <a href="<?php echo e(route('gerente_comercial_mostrarFormProyecto')); ?>">Agregar Proyecto</a>
                <!-- Listado de proyectos asociados al gerente comercial -->
                <ul id="listaProyectos">
                    <?php $__currentLoopData = $gerente_comercial->proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="#" class="proyecto-link"
                                data-proyecto-id="<?php echo e($proyecto->id); ?>"><?php echo e($proyecto->nombre); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <!-- Segunda columna: Detalles del Proyecto seleccionado -->
            <div style="flex: 2;">
                <h1>Detalles del Proyecto</h1>
                <!-- Aquí mostrarás los detalles del proyecto seleccionado -->
                <!-- Puedes utilizar la lógica similar a tu otro Blade para mostrar y modificar datos -->
                <!-- Por ejemplo, un formulario para editar los detalles del proyecto -->


                <?php if(isset($proyecto)): ?>
                    <form method="POST" action="<?php echo e(route('gerente_comercial_guardar_Proyecto')); ?>">
                        <?php echo csrf_field(); ?>
                        <!-- Campos para editar detalles del proyecto -->
                        <input type="text" name="id_proyecto" value="<?php echo e($proyecto->id); ?>" hidden>
                        <label for="nombre">Nombre </label>
                        <input type="text" name="nombre_proyecto" value="<?php echo e($proyecto->nombre); ?>">
                        <label for="id_categoria_proyecto">Categoría del Proyecto:</label>
                        <select id="id_categoria_proyecto" name="id_categoria_proyecto" required>
                            <?php $__currentLoopData = $categorias_proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria_proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categoria_proyecto->id); ?>"
                                    <?php echo e($proyecto->id_categoria_proyecto == $categoria_proyecto->id ? 'selected' : ''); ?>>
                                    <?php echo e($categoria_proyecto->nombre); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="nombre">Departamento </label>
                        <input type="text" name="departamento_proyecto" value="<?php echo e($proyecto->departamento); ?>">
                        <label for="nombre">Ciudad </label>
                        <input type="text" name="ciudad_proyecto" value="<?php echo e($proyecto->ciudad); ?>">
                        <label for="nombre">Direccion </label>
                        <input type="text" name="direccion_proyecto" value="<?php echo e($proyecto->direccion); ?>">
                        <label for="nombre">Fecha inicio </label>
                        <input type="date" name="fecha_inicio_proyecto" value="<?php echo e($proyecto->fecha_inicio); ?>">
                        <!-- ... Otros campos para editar detalles del proyecto ... -->
                        <button type="submit">Guardar Cambios</button>
                        <!-- Puedes agregar un botón para eliminar el proyecto -->
                        <!-- Ten en cuenta la seguridad y confirma la eliminación con un modal o similar -->
                    </form>
                <?php else: ?>
                    <p>No has seleccionado un proyecto.</p>
                <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\lotizen\backend\resources\views/gerente_comercial/proyecto.blade.php ENDPATH**/ ?>