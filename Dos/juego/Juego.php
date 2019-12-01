<?php

namespace juego;

require_once "Carta.php";
require_once "Jugador.php";

class Juego {

  private $baraja;
  public $jugador;

  public function __construct($nombre) {
    $palos = ["oros", "bastos", "espadas", "copas"];
    foreach($palos as $palo) {
      for($i=1;$i < 13; $i++) {
        if(!in_array($i, [8,9])) {
          $this->baraja[] = new Carta($palo, $i);
        }
      }
    }
    $this->setJugador($nombre);
    $this->iniciaJuego();
  }

  public function setJugador($nombre)
  {
    $this->jugador = new Jugador($nombre);
  }

  public function getJugador()
  {
    return $this->jugador;
  }

  public function iniciaJuego()
  {
    shuffle($this->baraja);
  }

  public function debugBaraja($cartas)
  {
    $this->baraja = $cartas;
  }

  public function pideCarta()
  {
    if($this->jugador->compruebaPasa()) {
      return;
    }

    if(!empty($this->baraja)) {
      $robada = array_shift($this->baraja);
      $this->jugador->setJugada($robada);
    }
  }

}
