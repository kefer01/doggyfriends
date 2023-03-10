<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\AdminController;
use Controllers\MainController;
use Controllers\UsuarioController;
use MVC\Router;
$router = new Router();

// Pagina Main
$router->get('/', [MainController::class, 'main']);
// Pagina Blog
$router->get('/proteccion', [MainController::class, 'proteccion']);
// Pagina Blog
$router->get('/nosotros', [MainController::class, 'nosotros']);

// Login
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Crear cuenta
$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

// Formulario de olvide mi password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
$router->post('/reestablecer', [LoginController::class, 'reestablecer']);

// Confirmacion de cuenta
$router->get('/confirmar', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

// Area privada
$router->get('/admin', [AdminController::class, 'index']);
// Usuario
$router->get('/usuario/index', [UsuarioController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();