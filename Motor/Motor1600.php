<?php

namespace Montadora\Motor\Motor1600;

use Montadora\Motor\Motor;

class Motor1600 extends Motor
{
    private $cilindrada = 1600;    
    public function getCilindrada()
    {
        return $this->cilindrada;
        //$this->cilindrada;
    }
}