<?


$new_webhook =  "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/user.get";

$cr - curl_init();
curl_setopt($cr, CURLOPT_URL, $new_webhook);
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
$dados_users = curl_exec($cr);
curl_close($cr);

var_dump($dados_users);