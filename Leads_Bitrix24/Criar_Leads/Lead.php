<?php
require '../../Bitrix.php';

class Lead extends Bitrix
{
    //Criando o atributo para conexão com o DB
    private $db;

    //função construtora executada sempre que cria um novo lead
    public function __construct()
    {
        $this->db = new PDO("sqlite:dbname=dbcrmbitrix;host=localhost", "root", "");
    }
    public function add($dados)
    {
        $endpoint = "crm.lead.add";
        return $this->call($endpoint, $dados);
    }

    public function list_Lead($endpoint)
    {
        $endpoint = "crm.lead.list.json";
    }

    public function get($endpoint)
    {
        $endpoint = "crm.lead.get.json";
    }

    public function addToDb($nome, $sobrenome, $valor, $mail, $phone, $newLeadId)
    {
        $this->db->exec("INSERT INTO leads (id, firstName, lastName, valor, telefone, email)
        VALUES ($newLeadId, $nome, $sobrenome, $valor, $phone, $mail)");
    }
}
