<?php

namespace Controllers;

use MVC\Router;

class AdminController {
    public static function index(Router $router) {
        iniciaSesion();
        isAuth();
        isAdmin();

        // $fecha = $_GET['fecha'] ??  date('Y-m-d');
        // $fechas = explode('-', $fecha);

        // if(!checkdate($fechas[1], $fechas[2], $fechas[0])){
        //     header('Location: /404');
        // };


        // // Consultar la base de datos
        // $consulta = "SELECT citas.id, citas.hora, CONCAT( usuarios.nombre, ' ', usuarios.apellido) as cliente, ";
        // $consulta .= " usuarios.email, usuarios.telefono, vacunas.nombre AS vacuna, vacunas.cantidad  ";
        // $consulta .= " FROM citas  ";
        // $consulta .= " LEFT OUTER JOIN usuarios ";
        // $consulta .= " ON citas.usuarioId=usuarios.id  ";
        // $consulta .= " LEFT OUTER JOIN vacunas ";
        // $consulta .= " ON vacunas.id = citas.vacunaId ";
        // $consulta .= " WHERE fecha =  '${fecha}' AND estatus = 0 ";

        // $citas = AdminCita::SQL($consulta);

        $router->render('admin/index', [
            'titulo' => 'Administrador',
            'nombre' => $_SESSION['nombre']
        ]);
    }
}
