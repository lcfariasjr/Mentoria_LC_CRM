<?php

class Bitrix
{

    private $webhook = "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/";

    public function call($endpoint, $parameters)
    {

        $ch =  curl_init();

        $url = $this->webhook . $endpoint;

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

        $result = curl_exec($ch);

        if ($result === false){
            echo 'Erro ao Criar o LEAD: ' .curl_error($ch);
        }
        else{
            $resultData = json_decode($result, true);
        }

        curl_close($ch);

        return $resultData;
    }
    
   

}




/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhookbitrix);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados_lead));

$dados_lead = curl_exec($ch);

curl_close($ch);

header("Location: /index.html");
*/