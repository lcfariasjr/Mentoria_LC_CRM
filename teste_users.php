<?php


$new_webhook =  "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/user.get";

$cr = curl_init();
curl_setopt($cr, CURLOPT_URL, $new_webhook);
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
$dados_users = curl_exec($cr);
curl_close($cr);

//echo(gettype($dados_users));

$dados_users = json_decode($dados_users, true);

var_dump($dados_users["result"][0][0]);