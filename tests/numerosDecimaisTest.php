<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use NumerosRomanos\ConversorDecimal;

class numerosDecimaisTest extends TestCase
{
    private $conversor;

    public function setUp()
    {
        $this->conversor = new ConversorDecimal();
    }

    public function testPossoConverterI()
    {
        $resultado = $this->conversor->converter('I');
        $this->assertEquals(1, $resultado);
    }

    public function testPossoConverterII()
    {
        $resultado = $this->conversor->converter('II');
        $this->assertEquals(2, $resultado);
    }

    public function testPossoConverterIII()
    {
        $resultado = $this->conversor->converter('III');
        $this->assertEquals(3, $resultado);
    }

    public function testPossoConverterIV()
    {
        $resultado = $this->conversor->converter('IV');
        $this->assertEquals(4, $resultado);
    }

    public function testPossoConverterV()
    {
      $resultado = $this->conversor->converter('V');
      $this->assertEquals(5, $resultado);
    }

    public function testPossoConverterVI()
    {
      $resultado = $this->conversor->converter('VI');
      $this->assertEquals(6, $resultado);
    }

    public function testPossoConverterVII()
    {
      $resultado = $this->conversor->converter('VII');
      $this->assertEquals(7, $resultado);
    }

    public function testPossoConverterVIII()
    {
      $resultado = $this->conversor->converter('VIII');
      $this->assertEquals(8, $resultado);
    }

    public function testPossoConverterIX()
    {
      $resultado = $this->conversor->converter('IX');
      $this->assertEquals(9, $resultado);
    }

    public function testPossoConverterX()
    {
      $resultado = $this->conversor->converter('X');
      $this->assertEquals(10, $resultado);
    }

    public function testPossoConverterXIV()
    {
      $resultado = $this->conversor->converter('XIV');
      $this->assertEquals(14, $resultado);
    }

    public function testPossoConverterXXVIII()
    {
      $resultado = $this->conversor->converter('XXVIII');
      $this->assertEquals(28, $resultado);
    }

    public function testPossoConverterMDLIV()
    {
      $resultado = $this->conversor->converter('MDLIV');
      $this->assertEquals(1554, $resultado);
    }

}
