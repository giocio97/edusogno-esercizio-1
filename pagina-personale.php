<?php
include('./php/config.php');
session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato']!== true){
    header("location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Pagina Personale </title>
</head>

<body>
    <?php include __DIR__ . '/php/header.php'; ?>
    <main>
        <h2>Ciao  <?= $_SESSION["email"];?>  ecco i tuoi eventi </h2> 

        <?php 
            $emailUser = $_SESSION["email"];
            $sql_eventi = $sql = "SELECT * FROM `eventi` WHERE `attendees` LIKE \'%$emailUser%\';";
            if ($result = $mysqli->query($sql_eventi)){
                if ($result->num_rows > 0){
                    while($row = $result->fetch_array()){
                        echo'
                        <div>
                        <h4>' . $row['nome_evento']. '</h4>
                        <p>'. $row['data_evento'].'</p>
                        </div>
                        ';
                    }
                } 
            }
            // else{
            //     echo '<div>non ci sono eventi</div>';
            // }
            $mysqli->close();
        ?>
    </main>
 

</body>
</html>