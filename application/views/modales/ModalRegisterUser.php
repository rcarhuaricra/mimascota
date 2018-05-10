<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Registrarme</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="formRegister" method="post" action="<?php echo base_url(); ?>register">

        <div class="form-group">
            <label for="User_name" class="form-control-label">E-mail:</label>
            <input type="text" placeholder="Nombre de Mascota" class="form-control required" id="User_name" name="User_name" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label for="Mascota_especie" class="form-control-label">Usuario:</label>
            <input type="text" placeholder="Especie de la mascota" class="form-control required" id="Mascota_especie" name="Mascota_especie" >
            <div class="form-control-feedback"></div>
        </div>
        <div class="form-group">
            <label for="Mascota_FecNacimiento" class="form-control-label">Nombre:</label>
            <input type="date" placeholder="Fecha de Nacimiento" class="form-control required" id="Mascota_FecNacimiento" name="Mascota_FecNacimiento" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label for="Mascota_Raza" class="form-control-label">Apellido Paterno:</label>
            <input type="text" placeholder="Ingrese Raza" class="form-control required" id="Mascota_Raza" name="Mascota_Raza" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label for="Mascota_Color" class="form-control-label">Apellido Materno:</label>
            <input type="text" placeholder="Color de Mascota" class="form-control required" id="Mascota_Color" name="Mascota_Color" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label for="Mascota_Sexo" class="form-control-label">Sexo:</label>
            <input type="text" placeholder="Sexo de Mascota" class="form-control required" id="Mascota_Sexo" name="Mascota_Sexo" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label for="Mascota_Sexo" class="form-control-label">Contraseña:</label>
            <input type="text" placeholder="Sexo de Mascota" class="form-control required" id="Mascota_Sexo" name="Mascota_Sexo" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label for="Mascota_Sexo" class="form-control-label">Confirme Contraseña:</label>
            <input type="text" placeholder="Sexo de Mascota" class="form-control required" id="Mascota_Sexo" name="Mascota_Sexo" >
            <div class="form-control-feedback" ></div>
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Deseo recibir correo de Eventos y Promociones.</span>
            </label>
        </div>


        <hr>

        <div class="form-group">
            <button type="button" class="btn btn-secondary cl" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="pull-right btn btn-outline-primary">Ingresar</button>                        
        </div>

    </form>
</div>         

<script>


    $(document).ready(function () {
        $("#formRegister").validate({
            rules: {
                Regis_email: {
                    "remote": {
                        url: "<?php echo base_url(); ?>validarDatos/EmailRegister",
                        type: "post",
                        data: {
                            email: function () {
                                return $("#Regis_email").val();
                            }
                        }
                    }
                },
                Regis_user: {
                    "remote": {
                        url: "<?php echo base_url(); ?>validarDatos/UserRegister",
                        type: "post",
                        data: {
                            Regis_user: function () {
                                return $("#Regis_user").val();
                            }
                        }
                    }
                }
            },
            messages: {
                Regis_email: {
                    remote: "El E-mail ingresado ya esta registrado <a href='#'>si quiere recuperar su contraseña aqui</a>"
                },
                Regis_user: {
                    remote: "El Usuario ingresado ya existe Elija otro"
                }
            }, submitHandler: function (form) {

                $.ajax({
                    type: $(form).attr("method"),
                    url: $(form).attr("action"),
                    data: $(form).serialize(),
                    success: function (response) {
                        $("#" + $(form).attr("id"))[0].reset();
                        if (response == true) {
                            swal('Su cuenta Fue Creada', 'Revise su Correo Para confirmar su Identidad', 'success', {
                                button: "Aceptar"
                            }).then((value) => {
                                location.reload();
                            });
                        } else {
                            swal('Su cuenta No Fue Creada', 'Por favor comuniquese con el administrador del sitio', 'error').then((value) => {
                                location.reload();
                            });

                        }
                    }
                });
                return false; // required to block normal submit since you used ajax
            }
        });
    });
</script>