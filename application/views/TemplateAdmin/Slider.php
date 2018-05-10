<script>
    $(document).ready(function () {

        alto();
    })
    $(window).resize(function () {
        //aqui el codigo que se ejecutara cuando se redimencione la ventana
        alto();
    })
    function alto() {
        var alto = $(window).height();
        var ancho = $(window).width();
        if (ancho < 768) {
            var hola = alto-150 ;
        } else {
           // var hola = alto;
        }
        //alert(alto);
        $(".swiper-slide").css("height", hola + "px !important");
        //alert("alto: " + alto + " ancho:" + ancho);
        //.css("background-color", "yellow");

    }
</script>
<div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-bg-position" style="background:url('<?php echo base_url('recursos/'); ?>slider/wallpaper-de-un-perro-pequeno.jpg')" data-hash="slide1">
            <div class="sliderTitulo">
                <h2>Un Amigo no se Compra</h2>
            </div>
        </div>
        <!--<div class="swiper-slide slider-bg-position" style="background:url('http://grafreez.com/wp-content/temp_demos/burnout/img/3.jpg')" data-hash="slide2">
            <h2>Happiness is nothing more than good health and a bad memory</h2>
        </div>-->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div> -->
</div>