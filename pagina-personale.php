<?php
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
    </main>
 
   
</body>
</html>