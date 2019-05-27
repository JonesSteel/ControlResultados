$(function () {
    $(".field-wrapper .field-placeholder").on("click", function () {
        $(this).closest(".field-wrapper").find("input").focus();
    });
    $(".field-wrapper input").on("keyup", function () {
        var value = $.trim($(this).val());
        if (value) {
            $(this).closest(".field-wrapper").addClass("hasValue");
        } else {
            $(this).closest(".field-wrapper").removeClass("hasValue");
        }
    });
});

function validaDatos() {
    var rfc = document.getElementById('rfc').value;
    var nombre = document.getElementById('nombre').value;
    var primer_apellido = document.getElementById('apellido_paterno').value;
    var segundo_apellido = document.getElementById('apellido_materno').value;
    var password = document.getElementById('password').value;
    var password_repite = document.getElementById('password_confirm').value;

    if (password != password_repite) {
        alert('El password ingresado es diferente');
        return false;
    } else {
        if (rfc != '' && nombre != '' && primer_apellido != '' && segundo_apellido != '' && password != '' && password_repite != '') {
            document.getElementById('formUsuario').submit();
        } else {
            if (rfc == '') {
                alert('Ingrese su RFC');
                document.getElementById('rfc'). focus();
                return false;
            }
            if (nombre == '') {
                alert('Ingrese su Nombre');
                document.getElementById('nombre').focus();
                return false;
            }
            if (primer_apellido == '') {
                alert('Ingrese su Apellido Paterno');
                document.getElementById('apellido_paterno').focus();
                return false;
            }
            if (segundo_apellido == '') {
                alert('Ingrese su Apellido Materno');
                document.getElementById('apellido_materno').focus();
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