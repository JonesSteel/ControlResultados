<body>
<div class="container">
    <h3 style="text-align: center">Subdirección de Validación y Proceso Registral</h3>
    <br>
    <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addValidacionModal"><span class="fa fa-plus"></span> Agregar</a>
    </div>
    <br>
    <br>
    <table class="table table-bordered" id="validacionListing">
        <thead>
        <tr>
            <th style="text-align: center" colspan="10">JUD de Validación del Transporte</th>
        </tr>
        <tr>
            <th style="text-align: center" colspan="5">Expedientes Recibidos</th>
            <th style="text-align: center" colspan="5">Expedientes Validados</th>
        </tr>
        <tr>
            <th style="text-align: center">Fecha</th>
            <th style="text-align: center">Carga</th>
            <th style="text-align: center">Ruta</th>
            <th style="text-align: center">Particulares</th>
            <th style="text-align: center">Taxi</th>
            <th style="text-align: center">Carga Validado</th>
            <th style="text-align: center">Ruta Validado</th>
            <th style="text-align: center">Particulares Validado</th>
            <th style="text-align: center">Taxi Validado</th>
            <th style="text-align: right">Acciones</th>
        </tr>
        </thead>
        <tbody id="validacionRecords" style="text-align: center">
        </tbody>
    </table>

    <form id="saveValidacionForm" method="post">
        <div class="modal fade" id="addValidacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega Nuevo Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Expedientes Recibidos</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="fecha" id="fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Carga</label>
                            <div class="col-md-10">
                                <input type="text" name="carga" id="carga" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Ruta</label>
                            <div class="col-md-10">
                                <input type="text" name="ruta" id="ruta" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Particulares</label>
                            <div class="col-md-10">
                                <input type="text" name="particulares" id="particulares" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Taxi</label>
                            <div class="col-md-10">
                                <input type="text" name="taxi" id="taxi" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Expedientes Validados</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Carga Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="val_carga" id="val_carga" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Ruta Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="val_ruta" id="val_ruta" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Particualres Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="val_particulares" id="val_particulares" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Taxi Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="val_taxi" id="val_taxi" class="form-control" required>
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

    <form id="editValidacionForm" method="post">
        <div class="modal fade" id="editValidacionModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 style="text-align: center">Expedientes Recibidos</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Fecha</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_fecha" id="edit_fecha" class="form-control form_datetime" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Carga</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_carga" id="edit_carga" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Ruta</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_ruta" id="edit_ruta" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Particulares</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_particulares" id="edit_particulares" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Taxi</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_taxi" id="edit_taxi" class="form-control" required>
                            </div>
                        </div>
                        <h6 style="text-align: center">Expedientes Validados</h6>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Carga Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_val_carga" id="edit_val_carga" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Ruta Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_val_ruta" id="edit_val_ruta" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Particulares Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_val_particulares" id="edit_val_particulares" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Taxi Validados</label>
                            <div class="col-md-10">
                                <input type="text" name="edit_val_taxi" id="edit_val_taxi" class="form-control" required>
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

    <form id="deleteValidacionForm" method="post">
        <div class="modal fade" id="deleteValidacionModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
        $(".validacionEdit").prop("disabled", true);
        $(".validacionDelete").prop("disabled", true);
        alert('La edición del reporte ya esta deshabilitada');
    } else {
        /*alert('Aun se puede editar el reporte');*/
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        validacionList();
        var table = $('#validacionListing').dataTable({
            "bPaginate": false,
            "bInfo": false,
            "bFilter": false,
            "bLengthChange": false,
            "pageLength": 5
        });
    });

    function validacionList() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url('ValidacionController/show'); ?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="'+ data[i].id_consecutivo +'">'+
                        '<td>'+ data[i].fecha +'</td>'+
                        '<td>'+ data[i].carga +'</td>'+
                        '<td>'+ data[i].ruta +'</td>'+
                        '<td>'+ data[i].particulares +'</td>'+
                        '<td>'+ data[i].taxi +'</td>'+
                        '<td>'+ data[i].carga_val +'</td>'+
                        '<td>'+ data[i].ruta_val +'</td>'+
                        '<td>'+ data[i].particulares_val +'</td>'+
                        '<td>'+ data[i].taxi_val +'</td>'+
                        '<td style="text-align: center">'+
                        '<a href="javascript:void(0);" data-toggle="tooltip" title="Editar" class="btn btn-success btn-sm validacionEdit" data-id_consecutivo="'+ data[i].id_consecutivo +'" data-fecha="'+ data[i].fecha +'" data-carga="'+ data[i].carga +'" data-ruta="'+ data[i].ruta +'" data-particulares="'+ data[i].particulares +'" ' + 'data-taxi="'+ data[i].taxi +'" data-carga_val="'+ data[i].carga_val +'" data-ruta_val="'+ data(i).ruta_val +'" data-particulares_val="'+ data(i).particulares_val +'" data-taxi_val="'+ data(i).taxi_val +'"> <i class="fas fa-edit"></i>' + '</a>'+' '+
                        '<a href="javascript:void(0);" data-toogle="tooltip" title="Eliminar" class="btn btn-secondary btn-sm validacionDelete" data-id_consecutivo="'+ data[i].id_consecutivo +'"><i class="fas fa-trash"></i></a>' + '</td>' + '</tr>';
                }
                $('#validacionRecords').html(html);
            }
        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#saveValidacionForm').submit('click', function () {
        var validacionFecha                 = $('#fecha').val();
        var validacionCarga                 = $('#carga').val();
        var validacionRuta                  = $('#ruta').val();
        var validacionParticulares          = $('#particulares').val();
        var validacionTaxi                  = $('#taxi').val();
        var validacionCarga_val             = $('#val_carga').val();
        var validacionRuta_val              = $('#val_ruta').val();
        var validacionParticulares_val      = $('#val_particulares').val();
        var validacionTaxi_val              = $('#val_taxi').val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url('ValidacionController/save'); ?>',
            dataType: 'JSON',
            data: {
                fecha: validacionFecha,
                carga: validacionCarga,
                ruta: validacionRuta,
                particulares: validacionParticulares,
                taxi: validacionTaxi,
                carga_val: validacionCarga_val,
                ruta_val: validacionRuta_val,
                particulares_val: validacionParticulares_val,
                taxi_val: validacionTaxi_val
            },
            success: function (data) {
                $('#fecha').val("");
                $('#carga').val("");
                $('#ruta').val("");
                $('#addValidacionModal').modal('hide');
                validacionList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    //Show edit modal
    $('#validacionRecords').on('click', '.validacionEdit', function () {
        $('#editValidacionModal').modal('show');
        $("#edit_id").val($(this).data('id_consecutivo'));
        $("#edit_fecha").val($(this).data('fecha'));
        $("#edit_carga").val($(this).data('carga'));
        $("#edit_ruta").val($(this).data('ruta'));
        $("#edit_particulares").val($(this).data('particulares'));
        $("#edit_taxi").val($(this).data('taxi'));
        $("#edit_val_carga").val($(this).data('carga_val'));
        $("#edit_val_ruta").val($(this).data('ruta_val'));
        $("#edit_val_particulares").val($(this).data('particulares_val'));
        $("#edit_val_taxi").val($(this).data('taxi_val'));
    });

    $('#editValidacionForm').on('submit', function () {
        var edit_id                = $('#edit_id').val();
        var edit_fecha             = $('#edit_fecha').val();
        var edit_carga             = $('#edit_carga').val();
        var edit_ruta              = $('#edit_ruta').val();
        var edit_particulares      = $('#edit_particulares').val();
        var edit_taxi              = $('#edit_taxi').val();
        var edit_val_carga         = $('#edit_val_carga').val();
        var edit_val_ruta          = $('#edit_val_ruta').val();
        var edit_val_particulares  = $('#edit_val_particulares').val();
        var edit_val_taxi          = $('#edit_val_taxi').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ValidacionController/update'); ?>",
            dataType: "JSON",
            data: {
                id_consecutivo: edit_id,
                fecha: edit_fecha,
                carga: edit_carga,
                ruta: edit_ruta,
                particulares: edit_particulares,
                taxi: edit_taxi,
                carga_val: edit_val_carga,
                ruta_val: edit_val_ruta,
                particulares_val: edit_val_particulares,
                taxi_val: edit_val_taxi
            },
            success: function (data) {
                $("#edit_id").val("");
                $("#edit_fecha").val("");
                $("#edit_carga").val("");
                $("#edit_ruta").val("");
                $("#edit_particulares").val("");
                $("#edit_taxi").val("");
                $("#edit_val_carga").val("");
                $("#edit_val_ruta").val("");
                $("#edit_val_particulares").val("");
                $("#edit_val_taxi").val("");
                $('#editValidacionModal').modal('hide');
                validacionList();
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    // Show delete modal
    $('#validacionRecords').on('click', '.validacionDelete', function () {
        var deleteId = $(this).data('id_consecutivo');
        $("#deleteValidacionModal").modal('show');
        $("#delete_id").val(deleteId);
    });

    $('#deleteValidacionForm').on('submit', function () {
        var deleteId = $("#delete_id").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ValidacionController/delete'); ?>",
            dataType: "JSON",
            data: {id_consecutivo: deleteId},
            success: function (data) {
                $('#' + deleteId).remove();
                $("#delete_id").val("");
                $("#deleteValidacionModal").modal('hide');
                validacionList();
            }
        });
        return false;
    });
</script>
</body>