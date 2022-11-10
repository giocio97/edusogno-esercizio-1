<?php
 $db_host = '127.0.0.1';
 $db_user = 'root';
 $db_password = 'root';
 $db_db = 'Edusogno';
 $db_port = 3306;

 $mysqli = new mysqli(
   $db_host,
   $db_user,
   $db_password,
   $db_db,
   $db_port
 );
   


if($mysqli == false){
    die("errore durante la connessione: " . $mysqli->connect_error);
}

?>