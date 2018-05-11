


<!-- Swiper Silder
        ================================================== -->
<!-- Slider main container -->

<section id="Body">
    <div class="container">
        <h1>Mis Mascotas</h1>
        <div class="text-center card-body">
            <button class="btn btn-primary" id="RegisterMascotaModal"><span class="icofont icofont-ui-add"></span> Agregar Mascota</button>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" >
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de Mascota</h5>
                        <p class="card-text">Descripción</p>
                        <div class="text-center">
                            <div class="btn-group " role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary"><span class="icofont icofont-eye-alt"></span> Ver Carné</button>                            
                                <button type="button" class="btn btn-primary"><span class="icofont icofont-holding-hands"></span> En Adopción</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de Mascota</h5>
                        <p class="card-text">Descripción</p>
                        <div class="text-center">
                            <div class="btn-group " role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary"><span class="icofont icofont-eye-alt"></span> Ver Carné</button>                            
                                <button type="button" class="btn btn-primary"><span class="icofont icofont-holding-hands"></span> Dar En Adopción</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="subtitulo">
            <h2>Un Amigo no se Compra</h2>
        </div>
        <p>
            En la actualidad, es común encontrar mascotas sin hogar en cualquier punto de nuestro Perú. Muchos de ellos nacieron en la calle, otros fueron abandonados por sus dueños en diversas situaciones. Diariamente, estos amigos están expuestos al frío y al calor intenso; lo que es peor, al maltrato y a la indiferencia de las personas.
        </p>
        <p>
            Muchos animalitos están en busca de un hogar. Por medio de nuestro Facebook difundimos mascotas en adopción. Así que si estas interesado en adoptar a un amigo para toda la vida, puedes consultar en el buscador de Facebook con el hastag #MiMascota
        </p>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#RegisterMascotaModal').trigger('click');
    });
    $("#RegisterMascotaModal").click(function (e) {
        e.preventDefault();
        $('#ModalRegistrarMascota').modal();
       
    });
</script>
