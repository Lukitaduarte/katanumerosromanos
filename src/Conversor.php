<?php
declare(strict_types=1);

namespace NumerosRomanos;

class Conversor
{
    private $osRomanos;

    public function __construct(){
        $this->osRomanos = [
            '1' => 'I',
            '5' => 'V',
            '10' => 'X',
            '50' => 'L',
            '100' => 'C',
            '500' => 'D',
            '1000' => 'M'
        ];
    }

    public function converter(int $numero) : string
    {
        if (isset($this->osRomanos[$numero])) {
            return $this->osRomanos[$numero];
        }

        $resultado = '';
        for ($i = 0; $i < $numero; $i++) {
            if ($this->numeroInvalido($resultado)) {
                $resultado .= $this->osRomanos[1];
            }
        }

        return $resultado;
    }

    private function numeroInvalido(string $numeroRomano) : boolean
    {
        $repeticoes = [];

        $ultimo = '';
        for ($i = 0; $i < strlen($numeroRomano); $i++) {
            $valor = $numeroRomano[$i];
            if (! isset($repeticoes[$valor])) {
                $repeticoes[$valor] = 1;
            }

            if ($valor === $ultimo) {
                $repeticoes[$valor] += 1;
            }
        }

        foreach($repeticoes as $valor) 
        {
            if ($valor > 3) {
                return true;
            } 
        }

        return false;
    }

}