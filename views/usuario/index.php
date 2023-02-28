<h1 class="nombre-pagina">Perfil del Paciente</h1>
<p class="descripcion-pagina">Elige que deseas hacer</p>

<?php
include_once __DIR__ . '/../templates/barra.php';
?>

<div>
    <p>Actualmente tienes: <?php echo $_SESSION['vacunas']; ?> dosis aplicadas</p>
    <div class="opciones">
        <div>
            <h3>Realizar cita</h3>
            <img src="/build/img/vacuna_primer_plano.jpg" alt="">
            <a class="boton" href="../cita">Solicitar Cita</a>
        </div>
        <div>
            <h3>Imprimir constancia de vacunación</h3>
            <img src="/build/img/constancia.png" alt="">
            <a class="boton" href="../cita/constancia">Imprimir</a>
        </div>
    </div>
</div>