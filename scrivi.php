<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        $_SESSION["numero"] = rand(1, 100);
    ?>
    <p>Dati scritti correttamente: <?php echo $_SESSION["numero"] ?></p>
    <a href="leggi.php">Leggi i dati</a>
    
</body>
</html>