<?php
require_once('config.php');

$email = $mysqli->real_escape_string($_POST['email']) ;
$password = $mysqli->real_escape_string($_POST['password']) ;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
   
    $sql_select = "SELECT * FROM utenti WHERE email = '$email' ";
    
    if($result = $mysqli->query($sql_select)){
        
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
           
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['loggato'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];

                header("location: ../pagina-personale.php" );

            } else{
                echo "la password non è corretta";
            }
        } else{
            echo "non ci sono account con questa email";
        }
    }else{
      echo "errore in fase di login";  
    }
   $mysqli->close();
}


?>