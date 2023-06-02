<?php

//Informações
$nome_lead = $_POST['nome_do_lead'];
$nome = $_POST["nome_contato"];
$sobrenome = $_POST["sobrenome_contato"];
$valor = $_POST["valor"];
$telefones = $_POST["telefones"];

echo 'Nome do Lead: ' .$nome_lead."<Br/>";
echo "Contato: "  .$nome ." " .$sobrenome ."<Br/>"; 
echo "Valor: R$" .$valor ."<Br/>";

$phone = [];

foreach ($telefones as $telefone){
    array_push($phone, ['VALUE' => $telefone, 'VALUE_TYPE' => 'WORK'] ); 
}




//Webhook
$webhookbitrix = "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/crm.lead.add.json";


$dados_lead = [
    'fields'=> [
        'TITLE' => $nome_lead,
        'NAME' => $nome,
        'LAST_NAME' => $sobrenome,
        'OPPORTUNITY' => $valor,
        'PHONE' => $phone,
    
    ]
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhookbitrix);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados_lead));

$dados_lead = curl_exec($ch);

curl_close($ch);

