
<div class="modal fade" id="ModalActualizarDatosUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="porqueActualizar" class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                <button id="porqueActualizar" class="btn btn-link">¿por que tengo que hacer esto?</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUpdateUser" method="post" action="<?php echo base_url(); ?>register">

                    <div class="form-group">
                        <label for="Regis_email" class="form-control-label">E-mail:</label>
                        <input type="email" placeholder="Ingrese E-mail" class="form-control required" id="Regis_email" name="Regis_email" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Regis_user" class="form-control-label">Usuario:</label>
                        <input type="text" placeholder="Ingrese Usuario" class="form-control required" id="Regis_user" name="Regis_user" >
                        <div class="form-control-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="Regis_name" class="form-control-label">Nombres:</label>
                        <input type="text" placeholder="Ingrese Nombres" class="form-control required" id="Regis_name" name="Regis_name" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Regis_ape_pat" class="form-control-label">Apellido Paterno:</label>
                        <input type="text" placeholder="Ingrese Apellido Paterno" class="form-control required" id="Regis_ape_pat" name="Regis_ape_pat" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Regis_ape_mat" class="form-control-label">Apellido Materno:</label>
                        <input type="text" placeholder="Ingrese Apellido Materno" class="form-control required" id="Regis_ape_mat" name="Regis_ape_mat" >
                        <div class="form-control-feedback" ></div>
                    </div>

                    <div class="form-group">
                        <label for="Regis_pass" class="form-control-label">Contraseña:</label>
                        <input type="password" placeholder="Ingrese Contraseña" class="form-control required"  id="Regis_pass" name="Regis_pass" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="User_Pass_confirm" class="form-control-label">Confirme Contraseña:</label>
                        <input type="password" placeholder="Confirme Contraseña" class="form-control required" equalTo="#Regis_pass" id="User_Pass_confirm" name="User_Pass_confirm" >
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" class="minimal" name="Check_Notificaciones" id="Check_Notificaciones"> Acepto recibir Novedades y Ofertas</label>
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
                            swal({
                                title: "Su cuenta Fue Creada",
                                text: "Revise su Correo Para confirmar su Identidad",
                                type: "success",
                                confirmButtonClass: "btn-primary",
                                confirmButtonText: "ok",
                                closeOnConfirm: false
                            }, function () {
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