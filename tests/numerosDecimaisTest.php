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

}
