<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión - Gerente Comercial</h1>

    <?php if(session('message')): ?>
        <p><?php echo e(session('message')); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login-gerente_comercial')); ?>">
        <?php echo csrf_field(); ?>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>

        <label for="contrasenia">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="../">Volver al menú principal</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Proyecto_Inmobiliaria\Proyecto_inmobiliaria\resources\views/gerente_comercial/login.blade.php ENDPATH**/ ?>