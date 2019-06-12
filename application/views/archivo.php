<body>
<div class="container">
    <h3 style="text-align: center">Subdirección de Archivo</h3>
    <br>
    <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addArchivoModal"><span class="fa fa-plus"></span> Agregar</a>
    </div>
    <br>
    <br>
    <table class="table table-bordered" id="archivoListing">
        <thead>
            <tr>
                <th style="text-align: center" colspan="2">Solicitud de Información</th>
                <th style="text-align: center" colspan="4">Solicitudes de Titulos de Concesión</th>
            </tr>
            <tr>
                <th style="text-align: center">Solicitudes de Expedientes</th>
                <th style="text-align: center">No. de Expedientes Cotejados y Entregados</th>
                <th style="text-align: center">Aceptadas</th>
                <th style="text-align: center">Rechazadas</th>
                <th style="text-align: center">Entrega de Titulos de Concensión</th>
                <th style="text-align: right">Acciones</th>
            </tr>
        </thead>
        <tbody id="archivoRecords" style="text-align: center">
        </tbody>
    </table>

    <form id="saveArchivoForm" method="post">
        <div class="modal fade" id="addArchivoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Solicitudes de Información</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Solicitud de Expedientes</label>
                            <div class="col-md-10">
                                <input type="text" name="solicitudes" id="solicitudes" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No. de Expedientes Cotejados y Entregados</label>
                            <div class="col-md-10">
                                <input type="text" name="expedientes" id="expedientes" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Solicitudes de Titulos de Concesión</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Aceptadas</label>
                            <div class="col-md-10">
                                <input type="text" name="aceptadas" id="aceptadas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Rechazadas</label>
                            <div class="col-md-10">
                                <input type="text" name="rechazadas" id="rechazadas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Entrega de Titulos de Concesión</label>
                            <div class="col-md-10">
                                <input type="text" name="titulos" id="titulos" class="form-control" required>
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

    <form id="editArchivoForm" method="post">
        <div class="modal fade" id="editArchivoModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Solicitudes de Información</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Solicitud de Expedientes</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_solicitudes" id="edit_solicitudes" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No. de Expedientes Cotejados y Entregados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_expedientes" id="edit_expedientes" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Solicitudes de Titulos de Concesión</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Aceptadas</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_aceptadas" id="edit_aceptadas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Rechazadas</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_rechazadas" id="edit_rechazadas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Entrega de Titulos de Concesión</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_titulos" id="edit_titulos" class="form-control" required>
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

    <form id="deleteArchivoForm" method="post">
        <div class="modal fade" id="deleteArchivoModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <br>
                        <button type="submit" class="btn btn-success">Si</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Javascript Section -->
<script type="text/javascript">
	$(document).ready(function () {
		archivoList();
		var table = $('#archivoListing').dataTable({
			"bPaginate": false,
			"bInfo": false,
			"bFilter": false,
			"bLengthChange": false,
			"pageLength": 5
		});
	});

    function archivoList() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('ConcentracionBaseDatos/show'); ?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="'+ data[i].id_consecutivo +'">'+
                        '<td>'+ data[i].solicitudes_expediente +'</td>'+
                        '<td>'+ data[i].exp_cotejados_y_entregados +'</td>'+
                        '<td>'+ data[i].aceptadas +'</td>'+
                        '<td>'+ data[i].rechazadas +'</td>'+
                        '<td>'+ data[i].entrega_titulos_concesion +'</td>'+
                        '<td style="text-align: right">'+
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm archivoEdit" data-id="'+ data[i].id_consecutivo +'" data-solicitudes="'+ data[i].solicitudes_expediente +'" data-expedientes="'+ data[i].exp_cotejados_y_entregados +'" data-aceptadas="'+ data[i].aceptadas +'" ' +
                        'data-rechazadas="'+ data[i].rechazadas +'" data-entrega="'+ data[i].entrega_titulos_concesion +'">Editar</a>'+' ' +
						'' + '<a href="javascript:void(0);" class="btn btn-danger archivoDelete" data-id="'+ data[i].id_consecutivo +'">Eliminar</a>' + '</td>' + '</tr>';
                }
                $('#archivoRecords').html(html);
            }
        });
    }
</script>

<script type="text/javascript">
    $('#saveArchivoForm').submit('click', function () {
        var archSolicitudes  = $('#solicitudes').val();
        var archExpedientes  = $('#expedientes').val();
        var archAceptadas    = $('#aceptadas').val();
        var archRechazadas   = $('#rechazadas').val();
        var archTitulos      = $('#titulos').val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url('ConcentracionBaseDatos/save'); ?>',
            dataType: 'JSON',
            data: {
                solicitudes_expediente: archSolicitudes,
                exp_cotejados_y_entregados: archExpedientes,
                aceptadas: archAceptadas,
                rechazadas: archRechazadas,
                entrega_titulos_concesion: archTitulos
            },
            success: function (data) {
                $('#solicitudes').val("");
                $('#expedientes').val("");
                $('#aceptadas').val("");
                $('#addArchivoModal').modal('hide');
                archivoList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
	//Show edit modal
	$('#archivoRecords').on('click', '.archivoEdit', function () {
		$('#editArchivoModal').modal('show');
		$("#edit_id").val($(this).data('id_consecutivo'));
		$("#edit_solicitudes").val($(this).data('solicitudes_expediente'));
		$("#edit_expedientes").val($(this).data('exp_cotejados_y_entregados'));
		$("#edit_aceptadas").val($(this).data('aceptadas'));
		$("#edit_rechazadas").val($(this).data('rechazadas'));
		$("#edit_titulos").val($(this).data('entrega_titulos_concesion'));
	});

    $('#editArchivoModal').on('submit', function () {
        var editId_consecutivo = $('#edit_id').val();
        var editSolicitudes    = $('#edit_solicitudes').val();
        var editExpedientes    = $('#edit_expedientes').val();
        var editAceptadas      = $('#edit_aceptadas').val();
        var editRechazadas     = $('#edit_rechazadas').val();
        var editTitulos        = $('#edit_titulos').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ConcentracionBaseDatos/update'); ?>",
            dataType: "JSON",
            data: {
                id_consecutivo: editId_consecutivo,
                solicitudes_expediente: editSolicitudes,
                exp_cotejados_y_entregados: editExpedientes,
                aceptadas: editAceptadas,
                rechazadas: editRechazadas,
                entrega_titulos_concesion: editTitulos
            },
            success: function (data) {
                $("#edit_id").val("");
                $("#edit_solicitudes").val("");
                $("#edit_expedientes").val("");
                $("#edit_aceptadas").val("");
                $("#edit_rechazadas").val("");
                $("#edit_titulos").val("");
                $('#editArchivoModal').modal('hide');
                archivoList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
	// Show delete modal
	$('#archivoRecords').on('click', '.archivoDelete', function () {
		var deleteId = $(this).data('id_consecutivo');
		$("#deleteArchivoModal").modal('show');
		$("#delete_id").val(deleteId);
	});

    $('#deleteArchivoForm').on('submit', function () {
        var deleteId = $("#delete_id").val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ConcentracionBaseDatos/delete'); ?>",
            dataType: "JSON",
            data: {id_consecutivo: deleteId},
            success: function (data) {
                $("#" + deleteId).remove();
                $("#delete_id").val("");
                $("#deleteArchivoModal").modal('hide');
                archivoList();
            }
        });
        return false;
    });
</script>
</body>
