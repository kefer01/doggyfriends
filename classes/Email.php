<?php
namespace Classes;
require __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);


use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $nombre;
    public $apellido;
    public $email;
    public $token;

    public function __construct($nombre, $apellido, $email, $token)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        // $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        // $mail->Port = 465;
        $mail->Username = $_ENV['EMA_USER'];
        $mail->Password = $_ENV['EMA_PASS'];
        $mail->setFrom('sistema@thedoggyfriends.com','Soporte - The Doggy Friends');
        $mail->addAddress($this->email, $this->nombre . " " . $this->apellido );
        $mail->Subject = 'Confirma tu cuenta en The Doggy Friends';
        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " " . $this->apellido . "</strong> Has creado tu cuenta en la aplicación para adopciones The Doggy Friends, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: 
        <a href='http://thedoggyfriends.com/confirmar?token=" . $this->token . "'>Confirmar Cuenta</a></p> ";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        // Enviar el mail
        $mail->send();
        // if (!$mail->send()) {
        //     debuguear('Mailer Error: ' . $mail->ErrorInfo);
        // } else {
        //     debuguear('The email message was sent.');
        // }
    }

    public function enviarInstrucciones()
    {
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = $_ENV['EMA_USER'];
        $mail->Password = $_ENV['EMA_PASS'];

        $mail->setFrom('sistema@thedoggyfriends.com','Soporte - The Doggy Friends');
        $mail->addAddress($this->email, $this->nombre . " " . $this->apellido );
        $mail->Subject = 'Reestablece tu password';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " " . $this->apellido . "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presiona aquí: 
         <a href='http://thedoggyfriends.com/recuperar?token=" . $this->token . "'>Reestablecer Password</a></p> ";
        $contenido .= "<p>Si tu no solicitaste el reestablecimiento de tu password, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el mail
        $mail->send();
    }
}