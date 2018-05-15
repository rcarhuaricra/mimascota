<?php
date_default_timezone_set("America/Lima");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="<?php echo base_url('recursos/'); ?>Nueva carpeta/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('recursos/'); ?>bootstrap-4.1.0-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <script src="<?php echo base_url('recursos/'); ?>jquery.min_1.js" type="text/javascript"></script>
        <script src="<?php echo base_url('recursos/'); ?>bootstrap-4.1.0-dist/js/bootstrap.min.js" type="text/javascript"></script>
        
        <link href="<?php echo base_url('recursos/'); ?>carrousel-ricv.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url('recursos/'); ?>carrousel-ricv.js" type="text/javascript"></script>
        
        <link href="<?php echo base_url('recursos/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('recursos/'); ?>fonts/icofont/css/icofont.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <?php $this->load->view('/TemplateAdmin/Pluging/SweetAlert'); ?>
        <?php $this->load->view('/TemplateAdmin/Pluging/Validator'); ?>
        <?php $this->load->view('/TemplateAdmin/Pluging/icheck'); ?>
        
        <link href="<?php echo base_url('recursos/'); ?>styleRicv.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (isset($pluging)) {
            foreach ($pluging as $key => $value) {
                echo $value;
            }
        }
        ?>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </head>
    <body>
