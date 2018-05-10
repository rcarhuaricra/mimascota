
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


<script>

    $(document).ready(function () {


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
            },

            submitHandler: function (form) {
                $.ajax({
                    type: $(form).attr("method"),
                    url: $(form).attr("action"),
                    data: $(form).serialize(),
                    success: function (response) {
                        console.log(response);
                        if (response == true) {
                            $("#ModalGeneral").modal('hide');
                            $("#ModalGeneral").on('hidden.bs.modal', function () {
                                location.reload();
                            });
                        }
                        /* $(form).html("<div id='message'></div>");
                         $('#message').html("<h2>Your request is on the way!</h2>")
                         .append("<p>someone</p>")
                         .hide()
                         .fadeIn(1500, function () {
                         $('#message').append("<img id='checkmark' src='images/ok.png' />");
                         });*/
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });


    });

</script>