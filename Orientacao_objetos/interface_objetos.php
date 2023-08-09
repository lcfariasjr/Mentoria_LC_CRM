<?php

interface Forma
{

    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma
{

    private $largura;
    private $altura;

    public function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }
    public function getTipo()
    {
        return 'Quadrado';
    }
    public function getArea()
    {
        return $this->largura *  $this->altura;
    }
}

class Circulo implements Forma
{

    private $raio;

    public function __construct($r)
    {
        $this->raio = $r;
    }

    public function getTipo()
    {
        return 'Circulo';
    }

    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

