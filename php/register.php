<?php
require_once('config.php');

$nome = $mysqli->real_escape_string($_POST['nome']); 
$cognome = $mysqli->real_escape_string($_POST['cognome']) ;
$email = $mysqli->real_escape_string($_POST['email']) ;
$password = $mysqli->real_escape_string($_POST['password']) ;
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email','$hashed_password' )";

if ($mysqli->query($sql) === true){
    echo "Registrazione effettuata con successo";
}else{
    echo "Errore durante registrazione utente $sql." . $mysqli->error;
}


?>