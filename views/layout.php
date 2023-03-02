<?php
$auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpTask | <?php echo $titulo ?? ''; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
<header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="izquierda">
                    <a href="/">
                        <img src="/build/img/logo.png" alt="Logotipo Doggy Friends">
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
    <?php echo $script ?? ''; ?>

</body>
</html>