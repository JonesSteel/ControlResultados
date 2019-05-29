<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro - Subsecretaria de Transporte</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/google-style.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="form-wrapper-outer">
    <div class="form-logo">
        <img src="<?php echo base_url('assets/img/emblema2.png');?>">
    </div>
    <div class="form-greeting">
        <strong><span>Subsecretaría de Transporte</span></strong>
        <h5><span>Registro</span></h5>
    </div>
    <form id="formUsuario" name="formUsuario" method="post" enctype="multipart/form-data" action="<?php echo base_url('Usuarios/agregaUsuario'); ?>">
        <div class="field-wrapper">
            <input type="text" name="usuario" id="usuario" style="text-transform: uppercase;" class="form-data" required autofocus>
            <div class="field-placeholder"><span>Ingresa tu RFC</span></div>
        </div>
        <div class="field-wrapper">
            <input type="text" name="nombre" id="nombre" style="text-transform: uppercase;" class="form-data" required>
            <div class="field-placeholder"><span>Ingresa tu(s) nombre(s)</span></div>
        </div>
        <div class="field-wrapper">
            <input type="text" name="primer_apellido" id="primer_apellido" style="text-transform: uppercase;" class="form-data" required>
            <div class="field-placeholder"><span>Apellido Paterno</span></div>
        </div>
        <div class="field-wrapper">
            <input type="text" name="segundo_apellido" id="segundo_apellido" style="text-transform: uppercase;" class="form-data" required>
            <div class="field-placeholder"><span>Apellido Materno</span></div>
        </div>
        <div class="field-wrapper">
            <input type="password" name="password" id="password" class="form-data" required>
            <div class="field-placeholder"><span>Introduce tu Contraseña</span></div>
        </div>
        <div class="field-wrapper">
            <input type="password" name="password_confirm" id="password_confirm" class="form-data" required>
            <div class="field-placeholder"><span>Introduce de nuevo tu Contraseña</span></div>
        </div>

        <?php
            if (isset($mensaje)) {
                echo "<center><span class='form-register' style='color: #1BB600';>". $mensaje ."</span></center>";
            }
            if (isset($mensajeError)) {
                echo "<center><span class='form-register' style='color: red';>". $mensajeError ."</span></center>";
            }
        ?>
        <div class="form-button">
            <a href="<?php echo base_url('Inicio/index'); ?>" class="form-register">Iniciar Sesión</a>
            <button type="button" class="btn btn-success" onclick="validaDatos();">Registrate</button>
        </div>
    </form>
</div>
</body>
<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/google-js.js'); ?>"></script>
<script type="text/javascript">
    function validaDatos() {
        var usuario = document.getElementById('usuario').value;
        var nombre = document.getElementById('nombre').value;
        var primer_apellido = document.getElementById('primer_apellido').value;
        var segundo_apellido = document.getElementById('segundo_apellido').value;
        var password = document.getElementById('password').value;
        var password_repite = document.getElementById('password_confirm').value;

        if (password != password_repite) {
            alert('El password ingresado es diferente');
            return false;
        } else {
            if (usuario != '' && nombre != '' && primer_apellido != '' && segundo_apellido != '' && password != '' && password_repite != '') {
                document.getElementById('formUsuario').submit();
            } else {
                if (usuario == '') {
                    alert('Ingrese su RFC');
                    document.getElementById('usuario'). focus();
                    return false;
                }
                if (nombre == '') {
                    alert('Ingrese su Nombre');
                    document.getElementById('nombre').focus();
                    return false;
                }
                if (primer_apellido == '') {
                    alert('Ingrese su Apellido Paterno');
                    document.getElementById('primer_apellido').focus();
                    return false;
                }
                if (segundo_apellido == '') {
                    alert('Ingrese su Apellido Materno');
                    document.getElementById('segundo_apellido').focus();
                    return false;
                }
                if (password == '') {
                    alert('Ingrese su Password');
                    document.getElementById('password').focus();
                    return false;
                }
                if (password_repite == '') {
                    alert('Repita el password ingresado');
                    document.getElementById('password_confirm').focus();
                    return false;
                }
            }
        }
    }
</script>
</html>
