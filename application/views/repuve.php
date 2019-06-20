<body>
<div class="container">
    <h3 style="text-align: center">Subdirección de Enlace con REPUVE</h3>
    <br>
    <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addRepuveModal"><span class="fa fa-plus"></span> Agregar</a>
    </div>
    <br>
    <br>
    <table class="table table-bordered" id="repuveListing">
        <thead>
        <tr>
            <th style="text-align: center" colspan="15">REPUVE</th>
        </tr>
        <tr>
            <th style="text-align: center">Fecha</th>
            <th style="text-align: center">Inscripción de Vehiculos</th>
            <th style="text-align: center">Actualización de Vehiculos</th>
            <th style="text-align: center">Seguimiento para Actualización de Motocicleta</th>
            <th style="text-align: center">Error en Sistema de Control Vehicular</th>
            <th style="text-align: center">No presenta documentación y se reagenda</th>
            <th style="text-align: center">Puestas a PGJ por Irregularidades</th>
            <th style="text-align: center">Peritajes Realizados</th>
            <th style="text-align: center">No se presento</th>
            <th style="text-align: center">Peritajes Programados</th>
            <th style="text-align: center">Solicitud de Peritajes en Sitio</th>
            <th style="text-align: center">Citas Agendadas</th>
            <th style="text-align: center">Atención Ciudadana</th>
            <th style="text-align: center">Llamadas Atendidas</th>
            <th style="text-align: right">Acciones</th>
        </tr>
        </thead>
        <tbody id="repuveRecords" style="text-align: center">
        </tbody>
    </table>

    <form id="saveRepuveForm" method="post">
        <div class="modal fade" id="addRepuveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">REPUVE</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="fecha" id="fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Inscripción de Vehiculos</label>
                            <div class="col-md-10">
                                <input type="text" name="inscripcion" id="inscripcion" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Actualización de Vehiculos</label>
                            <div class="col-md-10">
                                <input type="text" name="actualizacion" id="actualizacion" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Seguimiento para Actualización de Motocicleta</label>
                            <div class="col-md-10">
                                <input type="text" name="motos" id="motos" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Error en Sistema de Control Vehicular</label>
                            <div class="col-md-10">
                                <input type="text" name="error" id="error" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No presenta Documentación y se Reagenda</label>
                            <div class="col-md-10">
                                <input type="text" name="no_documentacion" id="no_documentacion" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Puestas a PGJ por Irregularidades</label>
                            <div class="col-md-10">
                                <input type="text" name="pgj" id="pgj" class="form-control" required>
                            </div>
                        </div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Peritajes Realizados</label>
							<div class="col-md-10">
								<input type="text" name="peritaje" id="peritaje" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">No se Presento</label>
							<div class="col-md-10">
								<input type="text" name="no_presento" id="no_presento" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Peritajes Programados</label>
							<div class="col-md-10">
								<input type="text" name="programados" id="programados" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Solicitud de Peritajes en Sitio</label>
							<div class="col-md-10">
								<input type="text" name="p_sitio" id="p_sitio" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Citas Agendadas</label>
							<div class="col-md-10">
								<input type="text" name="c_agendadas" id="c_agendadas" class="form-control" required>
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Atención Ciudadana</label>
                            <div class="col-md-10">
                                <input type="text" name="a_ciudadana" id="a_ciudadana" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Llamadas Atendidas</label>
                            <div class="col-md-10">
                                <input type="text" name="l_atendidas" id="l_atendidas" class="form-control" required>
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

    <form id="editRepuveForm" method="post">
        <div class="modal fade" id="editRepuveModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">REPUVE</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_fecha" id="edit_fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Inscripción de Vehiculos</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_inscripcion" id="edit_inscripcion" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Actualización de Vehiculos</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_actualizacion" id="edit_actualizacion" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Seguimiento para Actualización de Motocicleta</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_motos" id="edit_motos" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Error en Sistema de Control Vehicular</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_error" id="edit_error" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No presenta Documentación y se Reagenda</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_no_documentacion" id="edit_no_documentacion" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Puestas a PGJ por Irregularidades</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_pgj" id="edit_pgj" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Peritajes Realizados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_peritaje" id="edit_peritaje" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No se Presento</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_no_presento" id="edit_no_presento" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Peritajes Programados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_programados" id="edit_programados" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Solicitud de Peritajes en Sitio</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_p_sitio" id="edit_p_sitio" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Citas Agendadas</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_c_agendadas" id="edit_c_agendadas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Atención Ciudadana</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_a_ciudadana" id="edit_a_ciudadana" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Llamadas Atendidas</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_l_atendidas" id="edit_l_atendidas" class="form-control" required>
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

    <form id="deleteRepuveForm" method="post">
        <div class="modal fade" id="deleteRepuveModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
        $(".repuveEdit").prop("disabled", true);
        $(".repuveDelete").prop("disabled", true);
        alert('La edición del reporte ya esta deshabilitada');
    } else {
        /*alert('Aun se puede editar el reporte');*/
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        repuveList();
        var table = $('#repuveListing').dataTable({
            "bPaginate": true,
            "bInfo": false,
            "bFilter": false,
            "bLengthChange": false,
            "pageLength": 5,
            "scrollX": true
        });
    });

    function repuveList() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('RepuveController/show'); ?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="'+ data[i].id_consecutivo +'">'+
                        '<td>'+ data[i].fecha +'</td>'+
                        '<td>'+ data[i].inscripcion_vehiculo +'</td>'+
                        '<td>'+ data[i].actualizacion_vehiculo +'</td>'+
                        '<td>'+ data[i].seguimiento_moto +'</td>'+
                        '<td>'+ data[i].error_cvh +'</td>'+
                        '<td>'+ data[i].reagendado +'</td>'+
                        '<td>'+ data[i].irregularidades_pgj +'</td>'+
                        '<td>'+ data[i].peritajes_realizados +'</td>'+
                        '<td>'+ data[i].no_presentado +'</td>'+
                        '<td>'+ data[i].peritaje_programado +'</td>'+
                        '<td>'+ data[i].solicitud_peritaje +'</td>'+
                        '<td>'+ data[i].citas_agendadas +'</td>'+
                        '<td>'+ data[i].atencion_ciudadana +'</td>'+
                        '<td>'+ data[i].llamadas_atendidas +'</td>'+
                        '<td style="text-align: center">'+
                        '<a href="javascript:void(0);" data-toggle="tooltip" title="Editar" class="btn btn-success btn-sm repuveEdit" data-id_consecutivo="'+ data[i].id_consecutivo +'" data-fecha="'+ data[i].fecha +'" data-inscripcion_vehiculo="'+ data[i].inscripcion_vehiculo +'" data-actualizacion_vehiculo="'+ data[i].actualizacion_vehiculo +'" data-seguimiento_moto="'+ data[i].seguimiento_moto +'" ' + 'data-error_cvh="'+ data[i].error_cvh +'" data-reagendado="'+ data[i].reagendado +'" data-irregularidades_pgj="'+ data[i].irregularidades_pgj +'" data-peritajes_realizados="'+ data[i].peritajes_realizados +'" data-no_presentado="'+ data[i].no_presentado +'"  data-peritaje_programado="'+ data[i].peritaje_programado +'" data-solicitud_peritaje="'+ data[i].solicitud_peritaje +'" data-citas_agendadas="'+ data[i].citas_agendadas +'" data-atencion_ciudadana="'+ data[i].atencion_ciudadana +'" data-llamadas_atendidas="'+ data[i].llamadas_atendidas +'"> <i class="fas fa-edit"></i>' + '</a>'+' '+
                        '<a href="javascript:void(0);" data-toogle="tooltip" title="Eliminar" class="btn btn-secondary btn-sm repuveDelete" data-id_consecutivo="'+ data[i].id_consecutivo +'"><i class="fas fa-trash"></i></a>' + '</td>' + '</tr>';
                }
                $('#repuveRecords').html(html);
            }
        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#saveRepuveForm').submit('click', function () {
        var repuveFecha               = $('#fecha').val();
        var repuveInscripcion         = $('#inscripcion').val();
        var repuveActualizacion       = $('#actualizacion').val();
        var repuveSeguimiento         = $('#motos').val();
        var repuveError               = $('#error').val();
        var repuveReagendado          = $('#no_documentacion').val();
        var repuveIrregularidades     = $('#pgj').val();
        var repuvePeritajes           = $('#peritaje').val();
        var repuveNoPresentado        = $('#no_presento').val();
        var repuvePeritajeProgramado  = $('#programados').val();
        var repuveSolicitudPeritaje   = $('#p_sitio').val();
        var repuveCitas               = $('#c_agendadas').val();
        var repuveAtencion            = $('#a_ciudadana').val();
        var repuveLlamadas            = $('#l_atendidas').val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url('RepuveController/save'); ?>',
            dataType: 'JSON',
            data: {
                fecha: repuveFecha,
                inscripcion_vehiculo: repuveInscripcion,
                actualizacion_vehiculo: repuveActualizacion,
                seguimiento_moto: repuveSeguimiento,
                error_cvh: repuveError,
                reagendado: repuveReagendado,
                irregularidades_pgj: repuveIrregularidades,
                peritajes_realizados: repuvePeritajes,
                no_presentado: repuveNoPresentado,
                peritaje_programado: repuvePeritajeProgramado,
                solicitud_peritaje: repuveSolicitudPeritaje,
                citas_agendadas: repuveCitas,
                atencion_ciudadana: repuveAtencion,
                llamadas_atendidas: repuveLlamadas
            },
            success: function (data) {
                $('#fecha').val("");
                $('#inscripcion').val("");
                $('#actualizacion').val("");
                $('#addRepuveModal').modal('hide');
                repuveList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    //Show edit modal
    $('#repuveRecords').on('click', '.repuveEdit', function () {
        $('#editRepuveModal').modal('show');
        $("#edit_id").val($(this).data('id_consecutivo'));
        $("#edit_fecha").val($(this).data('fecha'));
        $("#edit_inscripcion").val($(this).data('inscripcion_vehiculo'));
        $("#edit_actualizacion").val($(this).data('actualizacion_vehiculo'));
        $("#edit_motos").val($(this).data('seguimiento_moto'));
        $("#edit_error").val($(this).data('error_cvh'));
        $("#edit_no_documentacion").val($(this).data('reagendado'));
        $("#edit_pgj").val($(this).data('irregularidades_pgj'));
        $("#edit_peritaje").val($(this).data('peritajes_realizados'));
        $("#edit_no_presento").val($(this).data('no_presentado'));
        $("#edit_programados").val($(this).data('peritaje_programado'));
        $("#edit_p_sitio").val($(this).data('solicitud_peritaje'));
        $("#edit_c_agendadas").val($(this).data('citas_agendadas'));
        $("#edit_a_ciudadana").val($(this).data('atencion_ciudadana'));
        $("#edit_l_atendidas").val($(this).data('llamadas_atendidas'));
    });

    $('#editValidacionForm').on('submit', function () {
        var edit_id                 = $('#edit_id').val();
        var edit_fecha              = $('#edit_fecha').val();
        var edit_inscripcion        = $('#edit_inscripcion').val();
        var edit_actualizacion      = $('#edit_actualizacion').val();
        var edit_motos              = $('#edit_motos').val();
        var edit_error              = $('#edit_error').val();
        var edit_no_documentacion   = $('#edit_no_documentacion').val();
        var edit_pgj                = $('#edit_pgj').val();
        var edit_peritaje           = $('#edit_peritaje').val();
        var edit_no_presento        = $('#edit_no_presento').val();
        var edit_programados        = $('#edit_programados').val();
        var edit_p_sitio            = $('#edit_p_sitio').val();
        var edit_c_agendadas        = $('#edit_c_agendadas').val();
        var edit_a_ciudadana        = $('#edit_a_ciudadana').val();
        var edit_l_atendidas        = $('#edit_l_atendidas').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('RepuveController/update'); ?>",
            dataType: "JSON",
            data: {
                id_consecutivo: edit_id,
                fecha: edit_fecha,
                inscripcion_vehiculo: edit_inscripcion,
                actualizacion_vehiculo: edit_actualizacion,
                seguimiento_moto: edit_motos,
                error_cvh: edit_error,
                reagendado: edit_no_documentacion,
                irregularidades_pgj: edit_pgj,
                peritajes_realizados: edit_peritaje,
                no_presentado: edit_no_presento,
                peritaje_programado: edit_programados,
                solicitud_peritaje: edit_p_sitio,
                citas_agendadas: edit_c_agendadas,
                atencion_ciudadana: edit_a_ciudadana,
                llamadas_atendidas: edit_l_atendidas
            },
            success: function (data) {
                $("#edit_id").val("");
                $("#edit_fecha").val("");
                $("#edit_inscripcion").val("");
                $("#edit_actualizacion").val("");
                $("#edit_motos").val("");
                $("#edit_error").val("");
                $("#edit_no_documentacion").val("");
                $("#edit_pgj").val("");
                $("#edit_peritaje").val("");
                $("#edit_no_presento").val("");
                $("#edit_programados").val("");
                $("#edit_p_sitio").val("");
                $("#edit_c_agendadas").val("");
                $("#edit_a_ciudadana").val("");
                $("#edit_l_atendidas").val("");
                $('#editRepuveModal').modal('hide');
                repuveList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    // Show delete modal
    $('#repuveRecords').on('click', '.repuveDelete', function () {
        var deleteId = $(this).data('id_consecutivo');
        $("#deleteRepuveModal").modal('show');
        $("#delete_id").val(deleteId);
    });

    $('#deleteRepuveForm').on('submit', function () {
        var deleteId = $("#delete_id").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('RepuveController/delete'); ?>",
            dataType: "JSON",
            data: {id_consecutivo: deleteId},
            success: function (data) {
                $('#' + deleteId).remove();
                $("#delete_id").val("");
                $("#deleteRepuveModal").modal('hide');
                moduloList();
            }
        });
        return false;
    });
</script>
</body>
