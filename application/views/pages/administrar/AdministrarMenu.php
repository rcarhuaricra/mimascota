<nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url("administrar") ?>"><span class="fa fa-gears"></span> Administrar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link"  href="<?php echo base_url("administrar/negocios") ?>"> <span class="icofont icofont-shopping-cart"></span> Negocios</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icofont icofont-animal-cat-with-dog"></span> Animales
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url("administrar/especies") ?>">Especies</a>
                    <a class="dropdown-item" href="<?php echo base_url("administrar/razas") ?>">Razas</a>
                    <a class="dropdown-item" href="<?php echo base_url("administrar/color") ?>">Color</a>
                </div>
            </li>
        </ul>
    </div>
</nav>