<?php

namespace Montadora\Motor\Motor;

/**
 * modelo base do motor
 * @author John Doe <john.doe@example.com>
 * @link http://www.google.com
 */
abstract class Motor
{
    //static private $cilindrada = 1000;
    private $combustivel = 'gasolina';
    protected $aceleracao = 0;
    private $ligado = false;
    
    /**
     * liga ou desliga o Motor
     * @return bool
     */
    public function ligar()
    {
        $this->ligado = !$this->ligado ;
        //funçao liga/desliga
        return $this->ligado;
    }
    /**
     * Acelerar o motor
     * @param type $potencia
     */
    public function acelerar($potencia)
    {
        
        $this->aceleracao = $potencia;
        $gasto = $potencia * $this->getCilindrada();
        return $gasto/1000;
    }
    
    abstract public function getCilindrada();
    
   
}