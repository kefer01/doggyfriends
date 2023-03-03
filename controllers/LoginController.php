<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController
{
    public static function login(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarLogin();

            if (empty($alertas)) {
                // Comprobar que exista el usuario
                $usuario = Usuario::where('correo', $auth->correo);

                if ($usuario) {
                    // Verificar el password
                    if ($usuario->comprobarPasswordAndVerificado($auth->pass)) {
                        // Autenticar el usuario
                        $_SESSION['id'] = $usuario->id_usuario;
                        $_SESSION['nombre'] = $usuario->p_nombre . " " . $usuario->p_apellido;
                        $_SESSION['correo'] = $usuario->correo;
                        $_SESSION['login'] = true;

                        //Redireccionamiento
                        if ($usuario->id_rol === "1") {
                            $_SESSION['admin'] = $usuario->id_rol ?? null;
                            header('Location: /admin');
                        } else {
                            header('Location: /usuario/index');
                        }
                    }
                } else {
                    Usuario::setAlerta('error', 'Usuario no encontrado');
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Render a la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);
    }

    public static function logout()
    {
        if(isset($_SESSION)){
            $_SESSION = [];
            header('Location: /');
        }
    }

    public static function crear(Router $router)
    {
        $usuario = new Usuario;
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            if (empty($alertas)) {
                $existeUsuario = Usuario::where('correo', $usuario->correo);
                if ($existeUsuario) {
                    Usuario::setAlerta('error', 'El Usuario ya esta registrado');
                    $alertas = Usuario::getAlertas();
                } else {
                    //Hashear el password
                    $usuario->hashPassword();

                    // Eliminar password2
                    unset($usuario->password2);

                    // Generar el Token
                    $usuario->crearToken();

                    // Crear un nuevo usuario
                    // $resultado = $usuario->guardar();
                    $resultado = true;
                    // Enviar email
                    $email = new Email($usuario->p_nombre, $usuario->p_apellido, $usuario->correo, $usuario->token);
                    $email->enviarConfirmacion();
                    if ($resultado) {
                        header('Location: /mensaje');
                    }
                }
            }
        }

        // Render a la vista
        $router->render('auth/crear', [
            'titulo' => 'Crea tu cuenta en UpTask',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function olvide(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        };

        // Render a la vista
        $router->render('auth/olvide', [
            'titulo' => 'Olvide mi Password'
        ]);
    }

    public static function reestablecer(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }

        // Render a la vista
        $router->render('auth/reestablecer', [
            'titulo' => 'Reestablecer Password'
        ]);
    }

    public static function mensaje(Router $router)
    {
        // Render a la vista 
        $router->render('auth/mensaje', [
            'titulo' => 'Cuenta Creada Exitosamente'
        ]);
    }

    public static function confirmar(Router $router)
    {
        $alertas = [];
        debuguear($_GET);
        $token = s($_GET['token']);
        $usuario = Usuario::where('token', $token);

        if (empty($usuario)) {
            // Mostrar mensaje de error
            Usuario::setAlerta('error', 'Token No Válido');
        } else {
            // Modificar a usuario confirmado
            $usuario->confirmado = "1";
            $usuario->token = null;

            // Actualizar los datos del usuario en la BD (Confirmado y Token)
            $usuario->guardar();
            Usuario::setAlerta('exito', "Cuenta Comprobada Correctamente");
        }
        // Obtener alertas
        $alertas = Usuario::getAlertas();

        // Render a la vista
        $router->render('auth/confirmar', [
            'titulo' => 'Confirmar',
            'alertas' => $alertas
        ]);
    }
}
