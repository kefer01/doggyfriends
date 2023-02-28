<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Funcion que valida si la sesion esta iniciada
function iniciaSesion() {
    if (!isset($_SESSION)) {
        session_start();
    }
}

// Función que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isAdmin(): void {
    if (!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}