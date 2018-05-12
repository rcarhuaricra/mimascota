<div class="modal fade" id="ModalRegistrarMascota" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar a Mi Mascota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRegister" method="post" action="<?php echo base_url(); ?>register">

                    <div class="form-group">
                        <label for="Mascota_name" class="form-control-label">Nombre de Mascota:</label>
                        <input type="text" placeholder="Nombre de Mascota" class="form-control required" id="Mascota_name" name="Mascota_name" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Mascota_especie" class="form-control-label">Especie de la mascota:</label>
                        <input type="text" placeholder="Especie de la mascota" class="form-control required" id="Mascota_especie" name="Mascota_especie" >
                        <div class="form-control-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="Mascota_FecNacimiento" class="form-control-label">Fecha de Nacimiento:</label>
                        <input type="date" placeholder="Fecha de Nacimiento" class="form-control required" id="Mascota_FecNacimiento" name="Mascota_FecNacimiento" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Mascota_Raza" class="form-control-label">Raza:</label>
                        <input type="text" placeholder="Ingrese Raza" class="form-control required" id="Mascota_Raza" name="Mascota_Raza" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Mascota_Color" class="form-control-label">Color de Mascota:</label>
                        <input type="text" placeholder="Color de Mascota" class="form-control required" id="Mascota_Color" name="Mascota_Color" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Mascota_Sexo" class="form-control-label">Sexo de Mascota:</label>
                        <input type="text" placeholder="Sexo de Mascota" class="form-control required" id="Mascota_Sexo" name="Mascota_Sexo" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Mascota_SenalesParticulares" class="form-control-label">Señales Particulares:</label>
                        <input type="text" placeholder="Señales Particulares" class="form-control required" id="Mascota_SenalesParticulares" name="Mascota_SenalesParticulares" >
                        <div class="form-control-feedback" ></div>
                    </div>


                    <hr>

                    <div class="form-group">
                        <button type="button" class="btn btn-secondary cl" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="pull-right btn btn-outline-primary">Ingresar</button>                        
                    </div>

                </form>
            </div>         
        </div>
    </div>
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