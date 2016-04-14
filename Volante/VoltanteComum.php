<?php

namespace Montadora\Volante\VolanteComum;

use Montadora\Volante\interfaceVolante;

class VolanteComum implements interfaceVolante
{
    private $direcao;
    
    public function girar($direcao) {
        $this->direcao = $direcao;
    }
}