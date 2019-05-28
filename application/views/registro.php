<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro - Dirección General del Registro Público del Transporte</title>
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
            <input type="text" name="rfc" id="rfc" class="form-data" required autofocus>
            <div class="field-placeholder"><span>Ingresa tu RFC</span></div>
        </div>
        <div class="field-wrapper">
            <input type="text" name="nombre" id="nombre" class="form-data" required>
            <div class="field-placeholder"><span>Ingresa tu(s) nombre(s)</span></div>
        </div>
        <div class="field-wrapper">
            <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-data" required>
            <div class="field-placeholder"><span>Apellido Paterno</span></div>
        </div>
        <div class="field-wrapper">
            <input type="text" name="apellido_materno" id="apellido_materno" class="form-data" required>
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
        <div class="form-button">
            <a href="<?php echo base_url('Welcome/index'); ?>" class="form-register">Iniciar Sesión</a>
            <button type="button" class="btn btn-success" onclick="validaDatos();">Registrate</button>
        </div>
    </form>
</div>
</body>
<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/google-js.js'); ?>"></script>
</html>
