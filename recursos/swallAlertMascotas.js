$("#porqueActualizar").click(function () {
    alert("hola");
    swal({
        title: "¿por que tengo que hacer esto?",
        html: true,
        text: "El objetivo de <b>Mi Mascota Favorita</b> ",
        type: "warning",
        confirmButtonText: "Si, Cambiar",
        showCancelButton: true,
        cancelButtonText: "No!",
        closeOnConfirm: false,
        confirmButtonClass: "btn-primary",
        cancelButtonClass: "btn-danger",
        showLoaderOnConfirm: true
    }, function () {

        swal({
            type: "success",
            title: "Cambio de Estado con exito",
            timer: 1500,
            showConfirmButton: false
        });

    });
});

