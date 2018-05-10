<style>
    .circuloIcono {
        color:white !important;
        background-color: #0297FF;
        padding: 8px 4px;
        border-radius: 50px;
        width: 70px;
        height: 70px;
        text-align: center;
    }
    .circuloIcono span{
        color:white !important;

    }
    .snavbar-nav>li>.dropdown-menu {
        position: absolute;
        right: 5%;
        left: auto;
        border: 1px solid #ddd;
        background: #fff;
    }
    li.user-header>img{
        z-index: 5;
        height: 90px;
        width: 90px;
        border: 3px solid;
        border-color: transparent;
        border-color: rgba(255,255,255,0.2);
    }
    .user-header{
        background-color: #0297FF;
        height: 175px;
        padding: 10px;
        text-align: center;
        color: white;
    }
    .user-body{
        padding: 15px;
        border-bottom: 1px solid #f4f4f4;
        border-top: 1px solid #dddddd;
    }
    .user-footer{
        background-color: #f9f9f9;
        padding: 10px;
    }
    li.user-header>p>small{
        display: block;
        font-size: 12px;
    }
    .dropdown-menu {
        width: 280px;
        xposition: absolute;
        right: 0 ;
        left: auto;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        text-align: left;
        list-style: none;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        xborder-radius: 0.25rem;
    }
    .logo{
        font-family: "Kaushan Script", cursive;
        -webkit-transform: rotate(-5deg);
        -moz-transform: rotate(-5deg);
        -ms-transform: rotate(-5deg);
        -o-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }
    @media only screen and (max-width: 768px ) {
        a.logo{
            font-size: 1.2em !important;
            -webkit-transform: rotate(-3deg);
            -moz-transform: rotate(-3deg);
            -ms-transform: rotate(-3deg);
            -o-transform: rotate(-3deg);
            transform: rotate(-3deg);
        }
    }
</style>
<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--blw">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right text-primary" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <span class="fa fa-home fa-lg"></span>
            </span>
        </button>

        <a class="navbar-brand logo" href="<?php echo base_url(); ?>">            
            <span class=" fa-2x icofont icofont-<?php echo ANIMAL; ?>"></span> Mi <span>Mascota <br>Favorita</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
                <?php if ($this->session->userdata('logged') === true) {
                    ?>                            
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icofont icofont-options"></span> <?php echo $this->session->userdata('user'); ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="user-header"> 
                                <img src="http://ricv.pe/wp-content/themes/ricv/images/user-2.jpg" class="rounded-circle" alt="User Image">
                                <p>
                                    <?php echo $this->session->userdata('nombre') . " " . $this->session->userdata('apellidos'); ?>
                                    <small>Miembro desde <?php echo fechas($this->session->userdata('registrado')); ?></small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class=" row">
                                    <div class="col-6">
                                        <a class="btn btn-link pull-left" href="<?php echo base_url() ?>mascotas">Mascotas</a>
                                    </div>

                                    <div class="col-6 ">
                                        <a class="btn btn-link pull-right" href="#">Perfil</a>
                                    </div>                                
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <?php
                                        if ($this->session->userdata('perfil') === "1") {
                                            ?> 

                                            <a class="btn btn-outline-primary pull-left" href="<?php echo base_url(); ?>administrar"><span class="fa fa-gears"></span> Administrar</a>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-6 ">
                                        <a class="btn btn-outline-primary pull-right" href="<?php echo base_url() ?>cerrar"><span class="fa fa-sign-out"></span> Salir</a>
                                    </div>     
                                </div>
                            </li>
                        </ul>
                    </li>


                    <?php
                }
                ?>

                <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="#benefits">Benefits</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#about">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>     
                <?php
                if ($this->session->userdata('logged') != true) {
                    ?>
                    <li class="nav-item"> <a class="nav-link" href="" class="btn btn-link" id="RegisterModal"><span class="icofont icofont-connection"></span> Unirse</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="" class="btn btn-link" id="LoginModal"><span class="icofont icofont-lock"></span> Iniciar sesión</a> </li>
                        <?php
                    }
                    ?>

            </ul>
        </div>
    </div>

</nav>
<script>
    $(document).ready(function () {
        var pathname = window.location.pathname;
        var myarr = pathname.split("/");
        var menu = $('#navbarCollapse1').children("li");
        //console.log(pathname);
        //console.log(myarr);

        $.each(menu, function (index) {
            console.log("menu" + menu);
            var item = $(this).attr('data-controller');
            console.log(item + "item");
            var largo = $(this).attr('data-controller');
            var activo = myarr[2] + '/' + myarr[3];
            // console.log(activo+'sss');
            if (item == activo) {
                $(this).addClass('active ');
            }
        });
    })
</script>