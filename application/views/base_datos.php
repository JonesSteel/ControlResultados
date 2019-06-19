<body>
<div class="container">
    <h3 style="text-align: center">Subdirección de Concentración y vinculación de Base de Datos</h3>
    <br>
    <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addBaseModal"><span class="fa fa-plus"></span> Agregar</a>
    </div>
    <br>
    <br>
    <table class="table table-bordered" id="baseListing">
        <thead>
        <tr>
            <th style="text-align: center" colspan="3">Proyectos (Horas totales proyecto / duración)</th>
            <th style="text-align: center" colspan="5">Soporte (Solicitudes de Usuarios)</th>
        </tr>
        <tr>
            <th style="text-align: center">Fecha</th>
            <th style="text-align: center">Total de Proyectos</th>
            <th style="text-align: center">Tiempo Invertido</th>
            <th style="text-align: center">Mantenimiento de Redes</th>
            <th style="text-align: center">Mantenimiento de Hardware</th>
            <th style="text-align: center">Mantenimiento de Software</th>
            <th style="text-align: center">Otros Servicios</th>
            <th style="text-align: right">Acciones</th>
        </tr>
        </thead>
        <tbody id="baseRecords" style="text-align: center">
        </tbody>
    </table>

    <form id="saveBaseForm" method="post">
        <div class="modal fade" id="addBaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Proyectos (Horas totales proyecto / duración)</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="fecha" id="fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Total de Proyectos</label>
                            <div class="col-md-10">
                                <input type="text" name="totales" id="totales" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tiempo Invertido</label>
                            <div class="col-md-10">
                                <input type="text" name="tiempo" id="tiempo" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Soporte (Solicitudes de Usuarios)</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mantenimiento de Redes</label>
                            <div class="col-md-10">
                                <input type="text" name="redes" id="redes" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mantenimiento de Hardware</label>
                            <div class="col-md-10">
                                <input type="text" name="hardware" id="hardware" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mantenimiento de Software</label>
                            <div class="col-md-10">
                                <input type="text" name="software" id="software" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Otros Servicios</label>
                            <div class="col-md-10">
                                <input type="text" name="otros" id="otros" class="form-control" required>
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

    <form id="editBaseForm" method="post">
        <div class="modal fade" id="editBaseModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Proyectos (Horas totales proyecto / duración)</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_fecha" id="edit_fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Total de Proyectos</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_totales" id="edit_totales" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tiempo Invertido</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_tiempo" id="edit_tiempo" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Soporte (Solicitudes de Usuarios)</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mantenimiento de Redes</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_redes" id="edit_redes" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mantenimiento de Hardware</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_hardware" id="edit_hardware" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Mantenimiento de Software</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_software" id="edit_software" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Otros Servicios</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_otros" id="edit_otros" class="form-control" required>
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

    <form id="deleteBaseForm" method="post">
        <div class="modal fade" id="deleteBaseModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
        $(".baseEdit").prop("disabled", true);
        $(".baseDelete").prop("disabled", true);
        alert('La edición del reporte ya esta deshabilitada');
    } else {
        /*alert('Aun se puede editar el reporte');*/
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        baseList();
        var table = $('#baseListing').dataTable({
            "bPaginate": false,
            "bInfo": false,
            "bFilter": false,
            "bLengthChange": false,
            "pageLength": 5
        });
    });

    function baseList() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('BaseController/show'); ?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="'+ data[i].id_consecutivo +'">'+
                        '<td>'+ data[i].fecha +'</td>'+
                        '<td>'+ data[i].total_proyectos +'</td>'+
                        '<td>'+ data[i].tiempo_invertido +'</td>'+
                        '<td>'+ data[i].mantenimiento_redes +'</td>'+
                        '<td>'+ data[i].mantenimiento_hardware +'</td>'+
                        '<td>'+ data[i].mantenimiento_software +'</td>'+
                        '<td>'+ data[i].otros +'</td>'+
                        '<td style="text-align: center">'+
                        '<a href="javascript:void(0);" data-toggle="tooltip" title="Editar" class="btn btn-success btn-sm baseEdit" data-id_consecutivo="'+ data[i].id_consecutivo +'" data-fecha="'+ data[i].fecha +'" data-total_proyectos="'+ data[i].total_proyectos +'" data-tiempo_invertido="'+ data[i].tiempo_invertido +'" data-mantenimiento_redes="'+ data[i].mantenimiento_redes +'" ' + 'data-mantenimiento_hardware="'+ data[i].mantenimiento_hardware +'" data-mantenimiento_software="'+ data[i].mantenimiento_software +'" data-otros="'+ data(i).otros +'"> <i class="fas fa-edit"></i>' + '</a>'+' '+
                        '<a href="javascript:void(0);" data-toogle="tooltip" title="Eliminar" class="btn btn-secondary btn-sm baseDelete" data-id_consecutivo="'+ data[i].id_consecutivo +'"><i class="fas fa-trash"></i></a>' + '</td>' + '</tr>';
                }
                $('#baseRecords').html(html);
            }
        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#saveBaseForm').submit('click', function () {
        var baseFecha                       = $('#fecha').val();
        var baseTotal_Proyectos             = $('#totales').val();
        var baseTiempo_Invertido            = $('#tiempo').val();
        var baseMantenimiento_Redes         = $('#redes').val();
        var baseMantenimiento_Hardware      = $('#hardware').val();
        var baseMantenimiento_Software      = $('#software').val();
        var baseOtros                       = $('#otros').val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url('BaseController/save'); ?>',
            dataType: 'JSON',
            data: {
                fecha: baseFecha,
                total_proyectos: baseTotal_Proyectos,
                tiempo_invertido: baseTiempo_Invertido,
                mantenimiento_redes: baseMantenimiento_Redes,
                mantenimiento_hardware: baseMantenimiento_Hardware,
                mantenimiento_software: baseMantenimiento_Software,
                otros:baseOtros
            },
            success: function (data) {
                $('#fecha').val("");
                $('#totales').val("");
                $('#tiempo').val("");
                $('#addBaseModal').modal('hide');
                baseList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    //Show edit modal
    $('#baseRecords').on('click', '.baseEdit', function () {
        $('#editBaseModal').modal('show');
        $("#edit_id").val($(this).data('id_consecutivo'));
        $("#edit_fecha").val($(this).data('fecha'));
        $("#edit_totales").val($(this).data('total_proyectos'));
        $("#edit_tiempo").val($(this).data('tiempo_invertido'));
        $("#edit_redes").val($(this).data('mantenimiento_redes'));
        $("#edit_hardware").val($(this).data('mantenimiento_hardware'));
        $("#edit_software").val($(this).data('mantenimiento_software'));
        $("#edit_otros").val($(this).data('otros'));
    });

    $('#editBaseForm').on('submit', function () {
        var edit_id             = $('#edit_id').val();
        var edit_fecha          = $('#edit_fecha').val();
        var edit_totales        = $('#edit_totales').val();
        var edit_tiempo         = $('#edit_tiempo').val();
        var edit_redes          = $('#edit_redes').val();
        var edit_hardware       = $('#edit_hardware').val();
        var edit_software       = $('#edit_software').val();
        var edit_otros          = $('#edit_otros').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BaseController/update'); ?>",
            dataType: "JSON",
            data: {
                id_consecutivo: edit_id,
                fecha: edit_fecha,
                total_proyectos: edit_totales,
                tiempo_invertido: edit_tiempo,
                mantenimiento_redes: edit_redes,
                mantenimiento_hardware: edit_hardware,
                mantenimiento_software: edit_software,
                otros: edit_otros
            },
            success: function (data) {
                $("#edit_id").val("");
                $("#edit_fecha").val("");
                $("#edit_totales").val("");
                $("#edit_tiempo").val("");
                $("#edit_redes").val("");
                $("#edit_hardware").val("");
                $("#edit_software").val("");
                $("#edit_otros").val("");
                $('#editBaseModal').modal('hide');
                baseList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    // Show delete modal
    $('#baseRecords').on('click', '.baseDelete', function () {
        var deleteId = $(this).data('id_consecutivo');
        $("#deleteBaseModal").modal('show');
        $("#delete_id").val(deleteId);
    });

    $('#deleteBaseForm').on('submit', function () {
        var deleteId = $("#delete_id").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('BaseController/delete'); ?>",
            dataType: "JSON",
            data: {id_consecutivo: deleteId},
            success: function (data) {
                $('#' + deleteId).remove();
                $("#delete_id").val("");
                $("#deleteBaseModal").modal('hide');
                baseList();
            }
        });
        return false;
    });
</script>
</body>