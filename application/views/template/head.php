<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Eydia Landing Page</title>

        <link rel="shortcut icon" href="<?php echo base_url('recursos/'); ?>img/icons/favicon.png">

        <!--
        Google Fonts
        ============================================= -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,700italic,300italic">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arvo:400,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:800,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Great+Vibes">


        <!--
        CSS
        ============================================= -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/jquery.bxslider.css">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/magnific-popup.css">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/icomoon.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/flaticon.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/supersized.css">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/jquery-ui.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/animate.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/multiscroll.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/selectize.default.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/jquery.fullPage.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/bbpress.css">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/bbp-theme.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/buddypress.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/buddypress-theme.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>syntax-highlighter/scripts/prettify.min.css">









        <!--
JavaScripts
========================== -->
        <!-- main jQuery -->
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/vendor/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.appear.js"></script>
        <?php
        if (isset($plugin)) {
            foreach ($plugin as $key => $value) {
                echo $value;
            }
        }
        ?>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.backstretch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.nav.js"></script>

        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/form.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.multiscroll.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery-countTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.mb.YTPlayer.min.js"></script>
        <!--TRAE IMAGENES DE EJEMPLO DELOS PERRITOS-->
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jflickrfeed.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.selectbox-0.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/tweetie.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.sticky.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.nicescroll.min.js"></script>
        <!--
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/okvideo.min.js"></script>
        -->
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/bootstrap-progressbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.circliful.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/masonry.pkgd.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/jquery.tubular.1.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/kenburned.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/mediaelement-and-player.min.js"></script>

        <!-- image filter -->
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/img-filter/jquery.gray.min.js"></script>
        <!-- // image filter -->
        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/wow.min.js"></script>
        <script src="<?php echo base_url('recursos/'); ?>syntax-highlighter/scripts/prettify.min.js"></script>
        <script type="text/javascript">$.SyntaxHighlighter.init();</script>



        <!-- Main Stylesheet -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/main.css">
        <!-- CSS media queries -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/media-queries.css">
        <link id="themeColorChangeLink" type="text/css" rel="stylesheet" href="<?php echo base_url('recursos/'); ?>css/colors/c10.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php echo base_url('recursos/'); ?>js/main.js"></script>
    </head>
