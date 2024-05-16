<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización de Datos</title>
    <style>
        body {
            display: flex;
        }

        .readonly {
            background-color: #f0f0f0;
        }

        .sidebar {
            flex: 1;
            background-color: #333;
            color: white;
            padding: 20px;
        }
        .main-content {
            flex: 3;
            padding: 20px;
        }
        .readonly {
            background-color: #f0f0f0;
        }
        .menu-item {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>Menú Lateral</h3>
        <ul>
            <li class="menu-item"><a href="/gerente_comercial/dashboard">Inicio</a></li>
            <li class="menu-item"><a href="/gerente_comercial/miperfil">Mi Perfil</a></li>
            <li class="menu-item"><a href="/gerente_comercial/login">Cerrar Sesion</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Datos Generales</h1>
        <form method="POST" action="<?php echo e(route('gerente_comercial_guardar_datos')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <label for="nombre_gerente_comercial">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo e($gerente_comercial->nombre); ?>"   class="readonly" readonly>
            <br>
            <label for="apellidos_gerente_comercial">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo e($gerente_comercial->apellidos); ?>"  class="readonly" readonly>
            <br>
            <label for="tipo_doc_gerente_comercial">Tipo de Documento:</label>
            <input type="text" id="tipo_doc" name="tipo_doc" value="<?php echo e($gerente_comercial->tipo_doc === 1 ? 'DNI' : $gerente_comercial->tipo_doc); ?>" class="readonly" readonly>

            <br>
            <label for="tipo_doc_gerente_comercial">N° Documento</label>
            <input type="text" id="tipo_doc" name="num_doc" value="<?php echo e($gerente_comercial->num_doc); ?>"  class="readonly" readonly>            
            <br>
            <label for="telefono_gerente_comercial">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo e($gerente_comercial->telefono); ?>"  oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="9">            
            <br>
            <label for="usuario_gerente_comercial">Usuario</label>
            <input type="text" id="usuario" name="usuario" value="<?php echo e($gerente_comercial->usuario); ?>" class="readonly"  readonly>            
            <br>

            <!-- Otros campos de Datos Generales aquí... -->

            <h1>Credenciales</h1>
            <label for="contrasenia_gerente_comercial">Correo: </label>
            <input type="text" id="correo" name="correo" value="<?php echo e($gerente_comercial->correo); ?>"  class="readonly" readonly>
            <br>
            <label for="contrasenia_gerente_comercial">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" value="<?php echo e($gerente_comercial->contrasenia); ?>">
            <br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>

    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Proyecto_Inmobiliaria\Proyecto_inmobiliaria\resources\views/gerente_comercial/miperfil.blade.php ENDPATH**/ ?>