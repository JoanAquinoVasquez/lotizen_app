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
            <li class="menu-item"><a href="/duenio/dashboard">Inicio</a></li>
            <li class="menu-item"><a href="<?php echo e(route('duenio_miperfil')); ?>">Mi Perfil</a></li>
            <li class="menu-item"><a href="/duenio/logout">Cerrar Sesion</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Datos Generales</h1>
        <form method="POST" action="<?php echo e(route('duenio_guardar_datos_perfil')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <label for="nombre_duenio">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo e($duenio->nombre); ?>"   class="readonly" readonly>
            <br>
            <label for="apellidos_duenio">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo e($duenio->apellidos); ?>"  class="readonly" readonly>
            <br>
            <label for="tipo_doc_duenio">Tipo de Documento:</label>
            <input type="text" id="tipo_doc" name="tipo_doc" value="<?php echo e($duenio->tipo_doc === 1 ? 'DNI' : $duenio->tipo_doc); ?>" class="readonly" readonly>

            <br>
            <label for="tipo_doc_duenio">N° Documento</label>
            <input type="text" id="tipo_doc" name="num_doc" value="<?php echo e($duenio->num_doc); ?>"  class="readonly" readonly>            
            <br>
            <label for="telefono_duenio">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo e($duenio->telefono); ?>"  oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="9">            
            <br>
            <label for="usuario_duenio">Usuario</label>
            <input type="text" id="usuario" name="usuario" value="<?php echo e($duenio->usuario); ?>" class="readonly"  readonly>            
            <br>

            <!-- Otros campos de Datos Generales aquí... -->

            <h1>Credenciales</h1>
            <label for="contrasenia_duenio">Correo: </label>
            <input type="text" id="correo" name="correo" value="<?php echo e($duenio->correo); ?>"  class="readonly" readonly>
            <br>
            <label for="contrasenia_duenio">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" value="<?php echo e($duenio->contrasenia); ?>">
            <br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>

    <div class="main-content">
        <h1>Empresa</h1>
        <form method="POST" action="<?php echo e(route('duenio_guardar_datos_empresa')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <label for="id_empresa">ID:</label>
            <input type="text" id="id_empresa" name="id_empresa" value="<?php echo e($empresa->id); ?>" class="readonly" readonly>
            <br>
            <label for="nombre_empresa">Nombre de la Empresa:</label>
            <input type="text" id="nombre_empresa" name="nombre_empresa" value="<?php echo e($empresa->nombre); ?>" class="readonly" readonly>
            <br>
            <label for="ruc">RUC</label>
            <input type="text" id="ruc" name="ruc" value="<?php echo e($empresa->ruc); ?>" class="readonly" readonly>
            <br>
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo">
            <br>
            
            

            <!-- Otros campos de Empresa aquí... -->
        <br>
        <br>
        <h1>Rubro</h1>
            <input type="hidden" id="rubro_id" name="rubro_id" value="<?php echo e($rubro->id); ?>">
            <label for="rubro_nombre">Nombre:</label>
            <input type="text" id="rubro_nombre" name="rubro_nombre" value="<?php echo e($rubro->nombre); ?>">
            <br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\lotizen\backend\resources\views/duenio/miperfil.blade.php ENDPATH**/ ?>