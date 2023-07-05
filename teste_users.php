<?php


$new_webhook =  "https://helpbr24.bitrix24.com.br/rest/936/9tz7nu2cwq03tysn/user.get";

$cr = curl_init();
curl_setopt($cr, CURLOPT_URL, $new_webhook);
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
$dados_users = curl_exec($cr);
curl_close($cr);

//echo(gettype($dados_users));


$dados_users = json_decode($dados_users, true);
$dados_users = $dados_users['result'];

$data_hoje = date('Y-m-d');
$login_hoje = [];
$contador_users = 0;

foreach ($dados_users as $dados_user) {
    $data_login = $dados_user['LAST_LOGIN'];
    // var_dump(['Login' => $data_login]);
    //var_dump(['Data Hoje' => $data_hoje]);
    //var_dump(['Dados_User' => $dados_user]);

    $data_login_subs = substr($data_login, 0, 10);
    //var_dump(['Substring' => $data_login_subs]);

    if ($data_login_subs === $data_hoje) {
        $contador_users = $contador_users + 1;
        array_push($login_hoje, $dados_user['NAME']);
    }
}

//var_dump($login_hoje);

//echo ("Temos um total de: ". $contador_users . " Logins no dia de hoje \n");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <th>
        Usuários
    </th>

    <?php
    foreach($login_hoje as $name_users): ?>

    <tr>
    <td><?php echo("$name_users") ?></td>
    </tr>
          

    <?php endforeach ?>
</table>
    
</body>
</html>
