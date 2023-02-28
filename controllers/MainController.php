<?php

namespace Controllers;

use Model\Mascota;
use MVC\Router;

class MainController {

    public static function main(Router $router) {

        $mascotas = Mascota::all();
        $router->render('main/index', [
            'mascotas' => $mascotas
        ]);
    }

    public static function blog(Router $router) {

        $router->render('main/blog', []);
    }

    public static function centros(Router $router) {
        $centros = Centro::all();
        $router->render('main/centros', [
            'centros' => $centros
        ]);
    }
}
