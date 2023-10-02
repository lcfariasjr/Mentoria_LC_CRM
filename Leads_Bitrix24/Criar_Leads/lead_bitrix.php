<?php

//require "../Classe_Bitrix.php";
require "./Lead.php";
//require "./processosDB.php";

//Informações
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





//Webhook
//$webhookbitrix = "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/crm.lead.add.json";

$dados_lead = [
    'fields' => [
        'TITLE' => $nome, $sobrenome,
        'NAME' => $nome,
        'LAST_NAME' => $sobrenome,
        'OPPORTUNITY' => $valor,
        'PHONE' => $phone,
        'EMAIL' => $mail,

        
    ]
];

//instanciando a Classe Lead para chamar o função Add.
$lead = new Lead();
$result_newlead = $lead->add($dados_lead); 


if (isset($result_newlead['result'])){
    $newLeadId = $result_newlead['result'];
    echo 'Lead criado com Sucesso .ID: '.$newLeadId;


}
else{
    echo 'Falha ao criar Lead'.$result_newlead;
}


//instanciando a Classe Lead para chamar o função AddToDb.

$lead->addToDb($newLeadId, $nome, $sobrenome, $valor, $phone, $mail);






/* 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhookbitrix);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados_lead));

$dados_lead = curl_exec($ch);

curl_close($ch);

*/

//header("Location: /index.html");
