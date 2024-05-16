<html>

<head>
    <title>Nuevo Proyecto</title>
</head>

<body>
    <h1>Crear Nuevo Proyecto</h1>

    <!-- Formulario para ingresar un nuevo proyecto -->
    <form method="POST" action="<?php echo e(route('gerente_comercial_agregarProyecto')); ?>">
        <?php echo csrf_field(); ?> <!-- Token de seguridad CSRF -->
        <!-- Campo para el nombre del proyecto -->
        <label for="nombre">Nombre del Proyecto:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <!-- Campo para la categoría del proyecto -->
        <label for="id_categoria_proyecto">Categoría del Proyecto:</label>
        <select id="id_categoria_proyecto" name="id_categoria_proyecto" required>
            <?php $__currentLoopData = $categorias_proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria_proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($categoria_proyecto->id); ?>"><?php echo e($categoria_proyecto->nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\xampp\htdocs\lotizen\backend\resources\views/gerente_comercial/agregar_proyecto.blade.php ENDPATH**/ ?>