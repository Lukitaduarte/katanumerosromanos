<?php
declare(strict_types=1);

namespace NumerosRomanos;

class ConversorDecimal
{
    private $osRomanos;

    public function __construct(){
        $this->osRomanos = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
    }

    public function converter(string $romano) : int
    {
        if (isset($this->osRomanos[$romano])) {
            return $this->osRomanos[$romano];
        }

        $resultado = 0;
        $anterior = '';

        for ($i = 0; $i < strlen($romano); $i++) {
            $atual = $romano[$i];
            if ($i > 0 && ($this->osRomanos[$atual] < $this->osRomanos[$anterior])) {
                $resultado += $this->osRomanos[$atual];
            } elseif ($i > 0 && $this->osRomanos[$atual] > $this->osRomanos[$anterior]) {
                $resultado += ($this->osRomanos[$atual] - $this->osRomanos[$anterior] - 1);
            } else {
                $resultado += $this->osRomanos[$atual];
            }

            $anterior = $romano[$i];
        }
        return $resultado;
    }
}