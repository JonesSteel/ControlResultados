<body>
<div class="container">
    <h3 style="text-align: center">Subdirección de Archivo</h3>
    <form>
        <div class="form-group">
            <label for="id_estructura" class="formulario">Cargo</label>
            <?php echo form_dropdown('nombre_cargo', $nombre_cargo, '', 'class="form-control"');?>
        </div>
        <div class="form-group">
            <label for="id_funcionario" class="formulario">Nombre</label>
            <?php echo form_dropdown('nombre_funcionario', $nombre_funcionario, '', 'class="form-control"');?>
        </div>
        <div class="form-group">
            <label for="localizacion" class="formulario">Localización</label>
            <input type="text" class="form-control" id="localizacion" required>
        </div>
        <h5 style="text-align: center">Solicitud de Información</h5>
        <div class="form-group">
            <label for="solicitud_expediente" class="formulario">Solicitud de Expedientes</label>
            <input type="text" class="form-control" id="solicitud_expediente" required>
        </div>
        <div class="form-group">
            <label for="expedientes_cotejados" class="formulario">Número de Expedientes Cotejados y Entregados</label>
            <input type="text" class="form-control" id="expedientes_cotejados" required>
        </div>
        <h5 style="text-align: center">Solicitud de Titulos de Concesión</h5>
        <div class="form-group">
            <label for="titulo_aceptado" class="formulario">Número de Titulos Aceptados</label>
            <input type="text" class="form-control" id="titulo_aceptado" required>
        </div>
        <div class="form-group">
            <label for="titulo_rechazado" class="formulario">Número de Titulos Rechazados</label>
            <input type="text" class="form-control" id="titulo_rechazado" required>
        </div>
        <div class="form-group">
            <label for="titulo_entregado" class="formulario">Número de Titulos Entregados</label>
            <input type="text" class="form-control" id="titulo_entregado" required>
        </div>
        <button type="submit" class="btn btn-success" disabled>Cargar</button>
    </form>
</div>
</body>