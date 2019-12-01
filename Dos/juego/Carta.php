<?php

namespace juego;

class Carta {
  private $palo;
  private $numero;

  public function __construct($pal, $num) {
    $this->setPalo($pal);
    $this->setNumero($num);
  }

  public function setPalo($pal)
  {
    $this->palo = $pal;
  }

  public function getPalo()
  {
    return $this->numero;
  }

  public function setNumero($num)
  {
    $this->numero = $num;
  }

  public function getNumero()
  {
    return $this->numero;
  }
}
