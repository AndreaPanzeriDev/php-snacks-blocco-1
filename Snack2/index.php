<?php

$name = $_GET["name"];
$age = $_GET["age"];
$mail = $GET_['mail'];




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Snack2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


    <body>
        
        <form method="get">
            <input  type="text" placeholder="Inserisci l'email" name="mail">
            <input type="text" placeholder="Inserisci il tuo nome" name="name">
            <input type="number" placeholder="Inserisci la tua etá" name="age">
            <button type="submit">Login</button>
        </form>

        <?php
            if(strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) !==  false){
               echo('Accesso riuscito');
            }else{
               echo('Accesso negato');
            }
        ?>

    </body>
</html>
