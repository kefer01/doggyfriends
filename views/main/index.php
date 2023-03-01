<h1>Bienvenidos a todos</h1>
<div class="inicio">
    <p>Huellas que marcan tu vida</p>
    <p>Dejando huella, en su vida y en la tuya...</p>
    <p>Kevin</p>
    <p>Jose</p>
    <p>Julio</p>
</div>
<div class="info">
<div class="contenedor-anuncios">
    <?php foreach($mascotas as $mascota) :?>
    <div class="anuncio">

        <img loading="lazy" src="/imagenes/<?php echo $mascota->imagen; ?>" alt="Foto Mascota">

        <div class="contenido-anuncio">
            <h3><?php echo $mascota->nombre; ?></h3>
            <p><?php echo $mascota->descripcion; ?></p>
            <p class="precio"><?php echo $mascota->raza; ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono_raza">
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