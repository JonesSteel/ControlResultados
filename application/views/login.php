<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sesión - Subsecretaría de Transporte</title>
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
        <h5><span>Inicio de Sesión</span></h5>
    </div>

    <form id="formLogin" name="formLogin" method="post" action="<?php echo base_url('inicio/autentifica'); ?>">
        <?php $this->session->sess_destroy();?>
        <div class="field-wrapper">
            <input type="text" name="inputUsuario" id="inputUsuario" style="text-transform: uppercase;" class="form-data" required autofocus>
            <div class="field-placeholder"><span>Usuario (RFC sin homoclave)</span></div>
        </div>
        <div class="field-wrapper">
            <input type="password" name="inputPassword" id="inputPassword" class="form-data" required>
            <div class="field-placeholder"><span>Introduce tu Contraseña</span></div>
        </div>

        <div class="form-button">
            <a href="<?php echo base_url('Usuarios/index'); ?>" class="form-register">Crear cuenta</a>
            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
            <?php
            if (isset($mensaje)) {
                echo "<center><span class='form-register' style='color: red';>". $mensaje ."</span></center>";
            }
            ?>
        </div>
    </form>
</div>
</body>
<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/google-js.js'); ?>"></script>
</html>