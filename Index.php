<?php

 $db = new PDO('sqlite:teste.db', '', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);


//$db = new SQLite3('teste.db');
//$db->exec('create table users(firstName varchar(50), lastName varchar(50), email varchar(50))');

//$db->exec('ALTER TABLE users, ADD  COLUMN email VARCHAR(50)');


//$db->exec("insert into users(firstName,lastName)values('Nathalia','Farias')");
//$db->exec("insert into users(firstName,lastName)values('Roseli','Farias')");

$query = $db->query("select rowid, * from users");
$users = $query->fetchAll();

//var_dump($users);

foreach($users as $key => $user){
    echo $user-> firstName;
}

//$result = $db->query('select rowid,* from users');
//var_dump($result->fetchArray(SQLITE3_ASSOC));


// function all($table)
// {
//     $db = new SQLite3('db.db');
//     $result = $db->query("select rowid,* from {$table} where rowid = :rowid");


//     $data = [];

//     while ($fetch = $result->fetchArray(SQLITE3_ASSOC)) {
//         array_push($data, $fetch);
//     }
//     return $data;
// }

// function get($table, $rowid){

//     $db = new SQLite3('db.db');
    
//     $result = $db->prepare("select rowid,* from {$table} where rowid = :rowid");
//     $result-> bindValue('rowid', $rowid);
//     $data = $result->execute();

//     return $data->fetchArray(SQLITE3_ASSOC);

//     }
 
//     $user = get('users', 2);

//     var_dump($user);

// //$users = all('users');


// /*foreach ($users as $key => $user) {
//     echo $user['firstName'];
// }*/
// //echo "rodou";
