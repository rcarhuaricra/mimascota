
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Agregar Especie</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="formNewEspecie" method="post" action="<?php echo base_url(); ?>NewEspecie">
        <div class="form-group">
            <label for="Especie" class="form-control-label"><span><span class="fa fa-user"></span> Especie:</label>
            <input type="text" class="form-control required" id="Especie" name="Especie" placeholder="Ingrese Especie">
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
        $("#formNewEspecie").validate({
            rules: {
                Especie: {
                    "remote": {
                        url: "<?php echo base_url(); ?>validarDatos/especie",
                        type: "post",
                        data: {
                            Especie: function () {
                                return $("#Especie").val();
                            }
                        }
                    }
                }
            },
            messages: {
                Especie: {
                    remote: "Esta Especie ya Existe"
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
                                title: "La Especie Fue Registrada Satisfactoriamente",
                                timer: 1500,
                                showConfirmButton: false
                            });
                            $("#ModalGeneral").modal('hide');
                            $("#ModalGeneral").on('hidden.bs.modal', function () {
                                $('#clearbtn').click();
                            });
                        }

                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });


    });

</script>