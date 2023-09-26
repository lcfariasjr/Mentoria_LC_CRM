<?php

$db = new SQLite3("dbcrmbitrix.db");

//$db = new PDO("sqlite:dbname=dbcrmbitrix;host=localhost", "root", "");

$db->exec('create table leads (id int, firstName varchar(50), lastName varchar(50), varlor double, telefone varchar(18), email varchar(50)) ');
//$db->exec('INSERT INTO leads (id, firstName, lastName, varlor. telefone, email');