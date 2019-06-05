<body>
<div class="container">
    <h3 style="text-align: center">Subdirección de Archivo</h3>
    <form>
        <div class="form-group">
            <label for="id_estructura">Cargo de quien Reporta</label>
            <?php echo form_dropdown('nombre_cargo', $nombre_cargo, '', 'class="form-control"');?>
        </div>
        <div class="form-group">
            <label for="id_estructura">Nombre de quien Reporta</label>
            <?php echo form_dropdown('nombre_funcionario', $nombre_funcionario, '', 'class="form-control"');?>
        </div>
    </form>
</div>
</body>