<?php

namespace Montadora\Motor\MotorTurbo;

use Montadora\Motor\Motor;

class MotorTurbo extends Motor
{
    public function acelerar($potencia) 
    {
        $this->aceleracao = $potencia * 2;
        $gasto = $potencia * $this->getCilindrada();
        return $gasto/1000;
    }
    
    public function getCilindrada() 
    {
        return 1400;
    }


}