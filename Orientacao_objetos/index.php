<?php

//Exercício Calculadora
/*require "calculadora.php";

$calc = new calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "Total: ".$calc->total()."<br/>";

$calc->clear();
*/

//Entendendo sobre Herança na Orientação

/*
require "likes_posts.php";

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('abc');

echo "Aqui começa o Likes"."<br/>";
echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." Likes - ".$foto->getUrl();
*/

//Polimorfismo
/*
require "interface_objetos.php";

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo


];

foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "AREA " . $tipo . " : " . $area . "<br/>";
}
*/

//