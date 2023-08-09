<?php
require '../Bitrix.php';

class Lead extends Bitrix
{
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
}
