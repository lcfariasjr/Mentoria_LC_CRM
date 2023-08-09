<?php

class Calculadora{

    private float $valor = 0;

    public function add ($n){
        $this->valor = $this-> valor + $n;
    }
    public function sub($n){
        $this->valor = $this-> valor - $n;

    }
    
    public function multiply ($n){
        $this->valor = $this-> valor * $n;

    }
    public function divide ($n){
        $this->valor = $this-> valor / $n;
    }

    public function total () {
        return $this->valor;
    }

    public function clear(){
        return $this->valor = 0;
    }

}