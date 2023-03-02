<?php
$auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoggyFiends |<?php echo $titulo ?? ''; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
<header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="izquierda">
                    <a href="/">
                        <img src="/build/img/logodoggy.png" alt="Logotipo Doggy Friends">
                    </a>
                </div>
                <div class="mobile-menu">
                    <img class="menu-hamburguesa" src="/build/img/menu-hamburguesa.png" alt="">
                </div>
                <div class="derecha">
                    <nav class="navegacion ver">
                        <a href="/cita">Dar en adopción</a>
                        <a href="/proteccion">Protección Animal</a>
                        <a href="/nosotros">Nosotros</a>
                        <a href="/adoptar">Adoptar</a>
                        <?php if (!$auth) { ?>
                            <a href="/login">Iniciar Sesión</a>
                        <?php } else { ?>
                            <a href="/usuario/index">Perfil</a>
                            <a href="/logout">Cerrar Sesión</a>
                        <?php } ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                        <a href="/cita">Dar en adopción</a>
                        <a href="/centros">Protección Animal</a>
                        <a href="/blog">Nosotros</a>
                        <a href="/blog">Adoptar</a>
                <?php if ($auth) { ?>
                    <a href="/usuario/index">Perfil</a>
                <?php } ?>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php echo $script ?? ''; ?>

</body>
</html>