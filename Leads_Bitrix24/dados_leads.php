<?php

//Dados Cliente

class Dados
{
    public $nome;
    public $sobrenome;
    public $valor;
    public $telefones;
    public $emails;

    public function __construct($nome, $sobrenome, $valor, $telefones, $emails)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->valor = $valor;
        $this->telefones = $telefones;
        $this->emails = $emails;
    }

}


$dados = new Dados($_POST["nome_lead"],$_POST["sobrenome_lead"],$_POST["valor"],$_POST["telefones"],$_POST["emails"]);

/*
$nome = $_POST["nome_lead"];
$sobrenome = $_POST["sobrenome_lead"];
$valor = $_POST["valor"];
$telefones = $_POST["telefones"];
$emails = $_POST["emails"];

$phone = [];

foreach ($telefones as $telefone) {
    array_push($phone, ['VALUE' => $telefone, 'VALUE_TYPE' => 'WORK']);
}

$mail = [];

foreach ($emails as $email) {
    array_push($mail, ['VALUE' => $email, 'VALUE_TYPE' => 'WORK']);
}
*/