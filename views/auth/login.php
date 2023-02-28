<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <form action="/" class="formulario" method="POST">
            <div class="campo">
                <label for="correo">Email</label>
                <input type="email" name="correo" id="correo" placeholder="Tu Correo">
            </div>
            <div class="campo">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Tu Contraseña">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta? obtener una</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div><!-- .contenedor-sm  -->
</div>