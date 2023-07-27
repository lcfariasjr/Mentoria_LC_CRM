<?php

//Informações
$nome = $_POST["nome_contato"];
$telefones = $_POST["telefones"];
$nomeDeal = $_POST["nome_deal"];
$valor = $_POST["valor"];

$phone = [];

foreach ($telefones as $telefone){
    array_push($phone, ['VALUE' => $telefone, 'VALUE_TYPE' => 'WORK'] ); 
}

//Webhook
$webhookbitrix = "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/";
$webhookDealAdd = "crm.deal.add.json";
$webhookContactAdd = "crm.deal.contact.add.json";



$dados_deal = [
    'fields'=> [
        'TITLE' => $nomeDeal,
        'VALUE' => $valor,
    
    ]
    ];

    $dados_contact = [
        'fields'=> [
            'NAME' => $nome,
            'PHONE' => $phone,
        
        ]
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhookbitrix.$webhookDealAdd);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados_deal));

$dados_deal = curl_exec($ch);

curl_close($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhookbitrix.$webhookContactAdd);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados_contact));

$dados_contact = curl_exec($ch);

curl_close($ch);


header("Location: /index.html");
