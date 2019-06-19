<body>
<div class="container">
    <h3 style="text-align: center">Módulo de Atención a Usuarios en el Registro</h3>
    <br>
    <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addModuloModal"><span class="fa fa-plus"></span> Agregar</a>
    </div>
    <br>
    <br>
    <table class="table table-bordered" id="moduloListing">
        <thead>
        <tr>
            <th style="text-align: center" colspan="7">Módulo de Atención del Registro</th>
        </tr>
        <tr>
            <th style="text-align: center" colspan="3">Solicitudes de Corrección de Datos</th>
            <th style="text-align: center" colspan="4">Atención a Usuarios Vulnerables</th>
        </tr>
        <tr>
            <th style="text-align: center">Fecha</th>
            <th style="text-align: center">Solicitudes Recibidas para Corrección de Datos</th>
            <th style="text-align: center">Corrección de Datos Realizadas</th>
            <th style="text-align: center">3a Edad</th>
            <th style="text-align: center">Embarazadas con Niños</th>
            <th style="text-align: center">Discapacidad</th>
            <th style="text-align: right">Acciones</th>
        </tr>
        </thead>
        <tbody id="moduloRecords" style="text-align: center">
        </tbody>
    </table>

    <form id="saveModuloForm" method="post">
        <div class="modal fade" id="addModuloModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Solicitudes de Corrección de Datos</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="fecha" id="fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Solicitudes Recibidas para Corrección de Datos</label>
                            <div class="col-md-10">
                                <input type="text" name="correccion" id="correccion" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Correcciones de Datos Realizadas</label>
                            <div class="col-md-10">
                                <input type="text" name="c_realizadas" id="c_realizadas" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Atención a Usuarios Vulnerables</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">3a Edad</label>
                            <div class="col-md-10">
                                <input type="text" name="edad" id="edad" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Embarazadas con Niños</label>
                            <div class="col-md-10">
                                <input type="text" name="pregnant" id="pregnant" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Discapacidad</label>
                            <div class="col-md-10">
                                <input type="text" name="discapacidad" id="discapacidad" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <br>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="editModuloForm" method="post">
        <div class="modal fade" id="editModuloModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Solicitudes de Corrección de Datos</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_fecha" id="edit_fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Solicitudes Recibidas para Corrección de Datos</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_correccion" id="edit_correccion" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Correcciones de Datos Realizadas</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_c_realizadas" id="edit_c_realizadas" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Atención a Usuarios Vulnerables</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">3a Edad</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_edad" id="edit_edad" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Embarazadas con Niños</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_pregnant" id="edit_pregnant" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Discapacidad</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_discapacidad" id="edit_discapacidad" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="edit_id" id="edit_id" class="form-control">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <br>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="deleteModuloForm" method="post">
        <div class="modal fade" id="deleteModuloModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Eliminar Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>¿Estas seguro de eliminar este registro?</strong>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="delete_id" id="delete_id" class="form-control">
                        <button type="submit" class="btn btn-success">Si</button>
                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Javascript Section -->
<script type="text/javascript">
    var dateLimit = moment().add(2, 'days');
    var now = moment();

    if (now > dateLimit) {
        $(".moduloEdit").prop("disabled", true);
        $(".moduloDelete").prop("disabled", true);
        alert('La edición del reporte ya esta deshabilitada');
    } else {
        /*alert('Aun se puede editar el reporte');*/
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        validacionList();
        var table = $('#moduloListing').dataTable({
            "bPaginate": true,
            "bInfo": false,
            "bFilter": false,
            "bLengthChange": false,
            "pageLength": 5
        });
    });

    function moduloList() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('ValidacionController/show_m'); ?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="'+ data[i].id_consecutivo +'">'+
                        '<td>'+ data[i].fecha +'</td>'+
                        '<td>'+ data[i].solicitudes_recibidas +'</td>'+
                        '<td>'+ data[i].correccion_datos +'</td>'+
                        '<td>'+ data[i].tercera_edad +'</td>'+
                        '<td>'+ data[i].embarazadas +'</td>'+
                        '<td>'+ data[i].discapacidad +'</td>'+
                        '<td style="text-align: center">'+
                        '<a href="javascript:void(0);" data-toggle="tooltip" title="Editar" class="btn btn-success btn-sm moduloEdit" data-id_consecutivo="'+ data[i].id_consecutivo +'" data-fecha="'+ data[i].fecha +'" data-solicitudes_recibidas="'+ data[i].solicitudes_recibidas +'" data-correccion_datos="'+ data[i].correccion_datos +'" data-tercera_edad="'+ data[i].tercera_edad +'" ' + 'data-embarazadas="'+ data[i].embarazadas +'" data-discapacidad="'+ data[i].discapacidad +'"> <i class="fas fa-edit"></i>' + '</a>'+' '+
                        '<a href="javascript:void(0);" data-toogle="tooltip" title="Eliminar" class="btn btn-secondary btn-sm moduloDelete" data-id_consecutivo="'+ data[i].id_consecutivo +'"><i class="fas fa-trash"></i></a>' + '</td>' + '</tr>';
                }
                $('#moduloRecords').html(html);
            }
        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#saveModuloForm').submit('click', function () {
        var moduloFecha          = $('#fecha').val();
        var moduloSolicitudes    = $('#solicitudes').val();
        var moduloCorreccion     = $('#correccion').val();
        var moduloTercera        = $('#edad').val();
        var moduloEmbarazadas    = $('#pregnant').val();
        var moduloDiscapacidad   = $('#discapacidad').val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url('ValidacionController/save_m'); ?>',
            dataType: 'JSON',
            data: {
                fecha: moduloFecha,
                solicitudes_recibidas: moduloSolicitudes,
                correccion_datos: moduloCorreccion,
                tercera_edad: moduloTercera,
                embarazadas: moduloEmbarazadas,
                discpacidad: moduloDiscapacidad
            },
            success: function (data) {
                $('#fecha').val("");
                $('#solicitudes').val("");
                $('#correccion').val("");
                $('#addModuloModal').modal('hide');
                moduloList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    //Show edit modal
    $('#moduloRecords').on('click', '.moduloEdit', function () {
        $('#editModuloModal').modal('show');
        $("#edit_id").val($(this).data('id_consecutivo'));
        $("#edit_fecha").val($(this).data('fecha'));
        $("#edit_solicitudes").val($(this).data('solicitudes_recibidas'));
        $("#edit_correccion").val($(this).data('correccion_datos'));
        $("#edit_edad").val($(this).data('tercera_edad'));
        $("#edit_pregnant").val($(this).data('embarazadas'));
        $("#edit_discapacidad").val($(this).data('discapacidad'));
    });

    $('#editValidacionForm').on('submit', function () {
        var edit_id                = $('#edit_id').val();
        var edit_fecha             = $('#edit_fecha').val();
        var edit_solicitudes       = $('#edit_solicitudes').val();
        var edit_correccion        = $('#edit_correccion').val();
        var edit_edad              = $('#edit_edad').val();
        var edit_pregnant          = $('#edit_pregnant').val();
        var edit_discapacidad      = $('#edit_discapacidad').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ValidacionController/update_m'); ?>",
            dataType: "JSON",
            data: {
                id_consecutivo: edit_id,
                fecha: edit_fecha,
                solicitudes_recibidas: edit_solicitudes,
                correccion_datos: edit_correccion,
                tercera_edad: edit_edad,
                embarazadas: edit_pregnant,
                discpacidad: edit_discapacidad,
            },
            success: function (data) {
                $("#edit_id").val("");
                $("#edit_fecha").val("");
                $("#edit_solicitudes").val("");
                $("#edit_correccion").val("");
                $("#edit_edad").val("");
                $("#edit_pregnant").val("");
                $("#edit_discapacidad").val("");
                $('#editModuloModal').modal('hide');
                moduloList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    // Show delete modal
    $('#moduloRecords').on('click', '.moduloDelete', function () {
        var deleteId = $(this).data('id_consecutivo');
        $("#deleteModuloModal").modal('show');
        $("#delete_id").val(deleteId);
    });

    $('#deleteModuloForm').on('submit', function () {
        var deleteId = $("#delete_id").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ValidacionController/delete_m'); ?>",
            dataType: "JSON",
            data: {id_consecutivo: deleteId},
            success: function (data) {
                $('#' + deleteId).remove();
                $("#delete_id").val("");
                $("#deleteModuloModal").modal('hide');
                moduloList();
            }
        });
        return false;
    });
</script>
</body>
