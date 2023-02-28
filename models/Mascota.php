<?php

namespace Model;

class Mascota extends ActiveRecord
{
    protected static $tabla = 'mascota';
    protected static $columnasDB = [
        'id_mascota', 'nombre', 'raza', 'genero', 'peso',
        'descripcion', 'id_usuario', 'estado', 'imagen'
    ];

    public $id_mascota;
    public $nombre;
    public $raza;
    public $genero;
    public $peso;
    public $descripcion;
    public $id_usuario;
    public $estado;
    public $imagen;

    public function __construct($args = [])
    {
        $this->id_mascota = $args['id_mascota'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->raza = $args['raza'] ?? '';
        $this->genero = $args['genero'] ?? '';
        $this->peso = $args['peso'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->id_usuario = $args['id_usuario'] ?? '';
        $this->estado = $args['estado'] ?? '';
    }

    public function validar()
    {
        if (!$this->nombre) {
            self::$errores[] = 'Debes añadir un nombre';
        }

        if (!$this->raza) {
            self::$errores[] = 'El raza es Obligatorio';
        }

        if (strlen($this->peso) < 50) {
            self::$errores[] = 'La peso es Obligatoria y debe tener al menos 50 caracteres';
        }

        if (!$this->descripcion) {
            self::$errores[] = 'El Número de descripcion es obligatorio';
        }

        if (!$this->id_usuario) {
            self::$errores[] = 'El Número de Baños es obligatorio';
        }

        if (!$this->estado) {
            self::$errores[] = 'El Número de lugares de estado es obligatorio';
        }

        if (!$this->vendedorid_mascota) {
            self::$errores[] = 'Elige un vendedor';
        }

        if (!$this->genero) {
            self::$errores[] = 'La genero es de la propiedad es Obligatoria';
        }

        return self::$errores;
    }
}
