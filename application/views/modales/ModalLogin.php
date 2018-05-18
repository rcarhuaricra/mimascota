
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formLogin" method="post" action="<?php echo base_url(); ?>login">
                    <div class="form-group">
                        <label for="Login_user" class="form-control-label"><span><span class="fa fa-user"></span> User o E-mail:</label>
                        <input type="text" class="form-control required" id="Login_user" name="Login_user" placeholder="Ingrese Usuario o Email">
                        <div class="form-control-feedback" ></div>
                    </div>
                    <div class="form-group">
                        <label for="Login_pass" class="form-control-label"><span><span class="fa fa-lock"></span> Password:</label>
                        <input type="password" class="form-control required" id="Login_pass" name="Login_pass" placeholder="Ingrese Password">
                        <div class="form-control-feedback"></div>
                    </div>  
                    <hr>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="pull-right btn btn-outline-primary" >Ingresar</button>                        
                    </div>
                </form>
            </div>         
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        $("#formLogin").submit(function (event) {
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
                    console.log(response);
                    if (response == true) {
                        $("#ModalLogin").modal('hide');
                        $("#ModalLogin").on('hidden.bs.modal', function () {
                            $(this).find('input', 'textarea', 'button', 'select').prop('disabled', false);
                            location.reload();
                        });
                    }
                }
            });
        });

        $("#formLogin").validate({
            rules: {
                Login_user: {
                    "remote": {
                        url: "<?php echo base_url(); ?>validarDatos/EmailUserLogin",
                        type: "post",
                        data: {
                            user: function () {
                                return $("#Login_user").val();
                            }
                        }
                    }
                },
                Login_pass: {
                    "remote": {
                        url: "<?php echo base_url(); ?>validarDatos/PassLogin",
                        type: "post",
                        data: {
                            user: function () {
                                return $("#Login_user").val();
                            },
                            pass: function () {
                                return $("#Login_pass").val();
                            }
                        }
                    }
                }
            },
            messages: {
                Login_user: {
                    remote: "El Usuario/E-mail ingresado no esta registrado"
                },
                Login_pass: {
                    remote: "El Password no coincide con el Usuario/E-mail ingresado. <a href='#' class='text-primary'>Enviar Password al correo</a>"
                }
            }

        });


    });

</script>