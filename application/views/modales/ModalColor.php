
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Agregar Color</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="formNewColor" method="post" action="<?php echo base_url(); ?>NewColor">
        <div class="form-group">
            <label for="Color" class="form-control-label"><span><span class="fa fa-user"></span> Color:</label>
            <input type="text"  class="form-control required" id="" name="Color" placeholder="Ingrese Especie">
            <div class="form-control-feedback" ></div>
        </div>

        <hr>
        <div class="form-group">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="pull-right btn btn-outline-primary" >Ingresar</button>                        
        </div>
    </form>
</div>         


<script>
    $(document).ready(function () {

    });

    $("#formNewColor").validate({
        rules: {
            Color: {
                "remote": {
                    url: "<?php echo base_url(); ?>validarDatos/color",
                    type: "post",
                    data: {
                        Color: function () {
                            return $("#Color").val();
                        }
                    }
                }
            }
        },
        messages: {
            Color: {
                remote: "Esta Color ya Existe"
            }
        },

        submitHandler: function (form) {
            $('button[type="submit"]').attr("disabled", true);
            $.ajax({
                type: $(form).attr("method"),
                url: $(form).attr("action"),
                data: $(form).serialize(),
                success: function (response) {
                    if (response == true) {
                        swal({
                            type: "success",
                            title: "La Color Fue Registrada Satisfactoriamente",
                            timer: 1500,
                            showConfirmButton: false
                        });
                        $("#ModalGeneral").modal('hide');
                        $("#ModalGeneral").on('hidden.bs.modal', function () {
                            $('#clearbtn').click();
                            $("#NewColorModal").focus();
                        });

                    }

                }
            });
            return false; // required to block normal submit since you used ajax
        }

    });


</script>