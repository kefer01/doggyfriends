<<<<<<< HEAD
<h1>Bienvenidos a todos</h1>
=======
<!-- <h1>Mascotas Disponibles</h1> -->

<div align="center" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50" src="https://www.bbva.ch/wp-content/uploads/2022/05/recurso_mascotas.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="https://www.bbva.ch/wp-content/uploads/2022/05/recurso_mascotas.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="https://www.bbva.ch/wp-content/uploads/2022/05/recurso_mascotas.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

>>>>>>> 35cdbc1 (Cambio Varios Imagenes)
<div class="inicio">
<<<<<<< HEAD
<<<<<<< HEAD
    <p>Dejando huella, en su vida y en la tuya...</p>
<<<<<<< HEAD
    <p>Kevin</p>
=======
>>>>>>> a69b008 (Le agregue unos puntos al slogan)
=======
    <p>Huellas que marcan tu vida</p>
>>>>>>> 89b41d9 (Le cambie el titulo y el slogan)
=======
    <p>Huellas que marcan tu vida</p>
=======
    <p>Dejando huella, en su vida y en la tuya...</p>
>>>>>>> 10f526b (dfsfdsf)
>>>>>>> a1113b0 (dfsfdsf)
</div>
<div class="info">
<div class="contenedor-anuncios">
    <?php foreach($mascotas as $mascota) :?>
    <div class="anuncio">

        <img loading="lazy" src="" alt="Foto Mascota">

        <div class="contenido-anuncio">
            <h3><?php echo $mascota->nombre; ?></h3>
            <p><?php echo $mascota->descripcion; ?></p>
            <p class="precio"><?php echo $mascota->raza; ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/IconoRaza.png" alt="icono_raza">

                    <p><?php echo $mascota->raza; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="doggyfriends\src\img\gender_sex_icon_131294.ico" alt="icono_genero">
                    <p><?php echo $mascota->genero; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono_peso">
                    <p><?php echo $mascota->peso; ?> Kg.</p>
                </li>
            </ul>
            <a href="/mascota?id=<?php echo $mascota->id; ?>" class="boton-amarillo-block">Adoptar</a>
        </div>
        <!--contenido-anuncio-->
    </div>
    <?php endforeach; ?>
</div>
<!--contenedor-anuncios-->
</div>