
<div class="modal fade" id="ModalRegisterUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrarme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRegister" method="post" action="<?php echo base_url(); ?>register">

                    <div class="form-group">
                        <label for="Regis_email" class="form-control-label">E-mail:</label>
                        <input type="email" placeholder="Ingrese E-mail" class="form-control required" id="Regis_email" name="Regis_email" >
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
    function submit() {
        $("#formRegister").submit(function (event) {
            $("button[type=submit]").prop('disabled', true);
            event.preventDefault();
            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data: $(this).serialize(),
                beforeSend: function () {
                    $(this).find('input', 'textarea', 'button', 'select').prop('disabled', true);
                },
                success: function (response) {
                    $("form")[0].reset();

                    $("#ModalRegisterUser").modal('hide');
                    $(this).find('input', 'textarea', 'button', 'select').prop('disabled', false);
                    if (response == true) {
                        swal({
                            title: "¡Gracias por Registrarse!",
                            html: true,
                            text: "Gracias por ser parte de <b>Mi Mascota Favorita</b><br>\n\
                                    Revise su Correo Para <b>confirmar su Identidad</b>, eso nos ayuda a \n\
                                    tener mejores indicadores de cuantas personas son realmente amigos de los animales",
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
        });
    }
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
           
        },
        messages: {
            Regis_email: {
                remote: "El E-mail ingresado ya esta registrado <a href='#'>si quiere recuperar su contraseña aqui</a>"
            }
        
        },
        submitHandler: function () {
            submit();
        }
    });
</script>