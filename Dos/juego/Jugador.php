<?php

namespace juego;

class Jugador {
  public $nombre;
  private $jugada;

  public function __construct($nom)
  {
    $this->nombre = $nom;
    $this->jugada = array();
  }

  public function setJugada($robada)
  {
    array_push($this->jugada, $robada);
  }

  public function getJugada()
  {
    return $this->jugada;
  }

  public function compruebaPasa()
  {
    $puntos = $this->compruebaJugada();
    if($puntos > 7.5) {
      return true;
    }
    return false;
  }

  public function compruebaJugada()
  {
    $suma = 0;
    foreach($this->jugada as $carta) {
      $valor = $carta->getNumero();
      $real = (in_array($valor, [10,11,12]) ? 0.5 : $valor);
      $suma += $real;
    }
    return $suma;
  }
}
