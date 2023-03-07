<?php

namespace Controllers;

use MVC\Router;

class UsuarioController {

    public static function index(Router $router) {
        isAuth();
        $router->render('usuario/index', [
            'nombre' => $_SESSION['nombre'],
            'titulo' => 'Tu Perfil'
        ]);
    }
}