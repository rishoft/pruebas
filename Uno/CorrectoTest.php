<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UsuarioSesionTest extends TestCase
{
  public function testCorrecto()
  {
    $usuario = UsuarioSesion::getInstance();
    $this->assertInstanceOf(UsuarioSesion::class, $usuario);
    $usuario->setUsuarioSesion("Paco");
    $this->assertEquals($usuario->getUsuarioSesion(), "Paco");
    $usuario = $usuario->getInstance();
    $this->assertEquals($usuario->getUsuarioSesion(), "Paco");
  }
}
