<?php

namespace Controllers;

use Model\Mascota;
use MVC\Router;

class MainController {

    public static function main(Router $router) {

        $mascotas = Mascota::all();
        $router->render('main/index', [
            'titulo' => 'Inicio',
            'mascotas' => $mascotas
        ]);
    }

    public static function proteccion(Router $router) {

        $router->render('main/proteccion', [
            'titulo' => 'Protección Animal',
        ]);
    }

    public static function nosotros(Router $router) {
  
        $router->render('main/nosotros', [
            'titulo' => 'Nosotros',
        ]);
    }
}
