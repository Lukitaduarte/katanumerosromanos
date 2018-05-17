<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use NumerosRomanos\Conversor;

class numerosRomanosTest extends TestCase
{

    public function testPossoConverter1()
    {
        $conversor = new Conversor();
        $resultado = $conversor->converter(1);
        $this->assertEquals('I', $resultado);
    }

    public function testPossoConverter2(){        
        $conversor = new Conversor();
        $resultado = $conversor->converter(2);
        $this->assertEquals('II', $resultado);
    }

    public function testPossoConverter3(){        
        $conversor = new Conversor();
        $resultado = $conversor->converter(3);
        $this->assertEquals('III', $resultado);
    }

    public function testPossoConverter4(){
        $conversor = new Conversor();
        $resultado = $conversor->converter(4);
        $this->assertEquals('IV', $resultado);
    }

}
