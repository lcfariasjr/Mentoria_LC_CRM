<?php
require "Leads_Bitrix24";

class Lead

{

    public $endpoint = null;


    public function add_Lead($endpoint, $dados)
    {
        $endpoint = "crm.lead.add.json";
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
