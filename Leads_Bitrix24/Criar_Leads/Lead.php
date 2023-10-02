<?php
require '../../Bitrix.php';



//$db = new PDO("sqlite:dbcrmbitrix.db");

class Lead extends Bitrix
{
    //Criando o atributo para conexão com o DB
    private $db;

    //função construtora executada sempre que cria um novo lead
     public function __construct()
     {
         //$this->db = new PDO("sqlite:dbcrmbitrix.db");
         $db = new PDO('sqlite:../../dbcrmbitrix.db', 'root', '');
         $this->db = $db;

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

    public function addToDb($newLeadId, $nome, $sobrenome, $valor, $mail, $phone)
    {
        
        $sql = 'INSERT INTO leads(id, firstname, lastname, valor, telefone, email) VALUES(?, ?, ?, ?, ?, ?)';
        $stmt = $this->db->prepare($sql);
        $mail = json_encode($mail);
        $phone = json_encode($phone);
        $stmt->execute([$newLeadId, $nome, $sobrenome, $valor, $mail, $phone]);

        return $this->db->lastInsertId();


       
        
    }
}
