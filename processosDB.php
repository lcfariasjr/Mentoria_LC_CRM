<?php

//$db = new SQLite3("dbcrmbitrix.db");

$db = new PDO('sqlite:dbcrmbitrix.db', 'root', '',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$db->exec('create table leads (id int, firstName varchar(50), lastName varchar(50), valor double, telefone text, email text) ');
//$db->exec('INSERT INTO leads (id, firstName, lastName, varlor. telefone, email');

$sql = $db->query('SELECT * FROM leads');
$dadosdb = $sql->fetchAll();

echo'<pres>';
print_r($dadosdb);