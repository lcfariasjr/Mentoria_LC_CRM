<?php

//Informações
$nome = $_POST["nome_contato"];
$sobrenome = $_POST["sobrenome_contato"];
$telefones = $_POST["telefones"];
$emails = $_POST["emails"];

$phone = [];

foreach ($telefones as $telefone){
    array_push($phone, ['VALUE' => $telefone, 'VALUE_TYPE' => 'WORK'] ); 
}

$mail = [];

foreach($emails as $email){
    array_push($mail, ['VALUE' => $email, 'VALUE_TYPE' => 'WORK']);
}




//Webhook
$webhookbitrix = "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/crm.contact.add.json";


$dados_contact = [
    'fields'=> [
        'NAME' => $nome,
        'LAST_NAME' => $sobrenome,
        'PHONE' => $phone,
        'EMAIL' => $mail,
    
    ]
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhookbitrix);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados_contact));

$dados_contact = curl_exec($ch);

curl_close($ch);

header("Location: /index.html");
