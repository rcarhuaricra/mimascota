
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->


    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left ">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x text-red "></i>
                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    //echo $_SESSION['email']
                    ?>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
            <li>
                <a>
                    <i class="fa fa-automobile "></i> <span>VEHICULOS  

                    </span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <?php
            $json = MENU;
            $obj = json_decode($json);
            foreach ($obj as $item) {
                ?>

                <li data-controller="<?php echo $item->controller; ?>">
                    <a href="<?php echo base_url() . $item->controller; ?>">
                        <i class="<?php echo "$item->color $item->icono"; ?>"></i> <span><?php echo $item->texto; ?></span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"><span class="ion-plus-round"></span></small>
                        </span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>
    <!-- /.sidebar -->

</aside>
<script>
    $(document).ready(function () {       
        var pathname = window.location.pathname;
        var myarr = pathname.split("/");
        var menu = $('.sidebar-menu').children("li");
        //console.log(myarr);
        $.each(menu, function (index) {
            var item = $(this).attr('data-controller');
          //  console.log(item);
            var largo = $(this).attr('data-controller');
            var activo = myarr[2]+'/'+myarr[3];
           // console.log(activo+'sss');
            if (item == activo) {
                $(this).addClass('active ');
            }
        });
    })
</script>