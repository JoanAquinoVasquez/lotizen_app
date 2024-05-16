<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión - Dueño</h1>
    <?php if(session('message')): ?>
        <p><?php echo e(session('message')); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login-duenio')); ?>">
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
<?php /**PATH C:\xampp\htdocs\lotizen\backend\resources\views/duenio/login.blade.php ENDPATH**/ ?>