<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>
<body>
  <?php include __DIR__ . '/php/header.php'; ?>
  <h2>Crea il tuo account</h2>
  <main>
    
    <form action="php/register.php" method="POST">
       
        
        <label for="nome">inserisci il nome</label>
        <input type="text" name="nome" placeholder="Mario" required >

        <label for="cognome">inserisci il Cognome</label>
        <input type="text" name="cognome" placeholder="Rossi" required>

        <label for="email">inserisci l'email</label>
        <input type="email" name="email" placeholder="name@example.com" required>

        <label for="password">inserisci password</label>
        <input type="password" name="password" placeholder="scrivi qui" required>

        <input class="button" type="submit" value="REGISTRATI">
        <p>Hai già un account? <a href="login.html">Accedi</a></p>

        

    </form>
    </main>
</body>

</html>