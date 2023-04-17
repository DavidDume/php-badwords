<?php

    $name = 'Hello'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="result.php">

        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
        <input type="text" name="badword" id="badword" placeholder="Inserisci badword">
        
        <button type="submit">Inserisci</button>

    </form>
</body>
</html>