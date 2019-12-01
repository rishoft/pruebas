<?php
declare(strict_types=1);

final class UsuarioSesion
{

    private static $instance = NULL;
    private $nombre = NULL;

    private function __construct() { }

    private function __clone() { }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new UsuarioSesion();
        }
        return self::$instance;
    }

    public function setUsuarioSesion($nombre)
    {
      $nombre = trim($nombre);

      if (is_null($nombre) || $nombre == "") {
       $this->nombre = NULL;
     }

     $this->nombre = $nombre;
    }

    public function getUsuarioSesion()
    {
      return $this->nombre;
    }

}
