<?php

namespace Controllers;

use Model\Mascota;
use MVC\Router;

class MainController {

    public static function main(Router $router) {

        // Consultar la base de datos
        $consulta = "SELECT m.id, m.nombre, r.raza, g.nombre genero, m.peso, m.descripcion, ";
        $consulta .= " m.id_usuario, m.estado, m.imagen  ";
        $consulta .= " from mascota m  ";
        $consulta .= " inner join genero_mascota g on m.genero = g.id  ";
        $consulta .= " inner join raza r on m.raza = r.id";
        // debuguear($consulta);
        $mascotas = Mascota::SQL($consulta);
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
