<?php

    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];
    $replaced = str_replace($badword, '***', $paragraph)
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
    <h1><?php echo $paragraph; ?></h1>
    <h1>Is <?php echo strlen($paragraph); ?> characters long</h1>
    <hr>
    <h1><?php  echo $replaced; ?></h1>
    <h1>Is <?php echo strlen($replaced); ?> characters long</h1>
</body>
</html>