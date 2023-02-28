<h1>Centros de Vacunación</h1>
<div class="centros-info">
    <div class="centro-1">
        <div>
            <h3>Información importante</h3>
            <p>Hemos habilitado varios centros de vacunacion para estar mas cerca de tu comunidad y que puedas aplicarte la vacuna contra el COVID-19 y asi protegerte a ti y tus seres mas queridos.</p>
        </div>
        <img src="/build/img/centros-vacunacion.png" alt="Imagen Sede del IGSS">
    </div>
    <h3>Centros mas populares</h3>
    <?php foreach ($centros as $centro) { ?>
        <div class="centros">
            <h4><?php echo $centro->centro ?></h4>
            <p><?php echo $centro->direccion ?></p>
        </div>
    <?php } ?>
</div>