


<!-- Swiper Silder
        ================================================== -->
<!-- Slider main container -->

<section id="Body">
    <div class="container">
        <div class="titulo text-center">
            <h2>Mascotas Individuales</h2>
        </div>
        <div class="contenido">
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.

        </div>
    </div>
</section>
<div class="modal fade" id="ModalGeneral" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>

<script>
    $("#LoginModal").click(function (e) {
        e.preventDefault();
        $('#ModalGeneral').modal();
        $.ajax({
            cache: false,
            type: 'POST',
            url: '<?php echo base_url(); ?>modal/modalLogin',
            success: function (response) {
                $('#ModalGeneral').children("div").children("div.modal-content").html(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    $("#RegisterModal").click(function (e) {
        e.preventDefault();
        $('#ModalGeneral').modal();
        $.ajax({
            cache: false,
            type: 'POST',
            url: '<?php echo base_url(); ?>modal/modalRegister',
            success: function (response) {
                $('#ModalGeneral').children("div").children("div.modal-content").html(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });



</script>

</body>

</html>
