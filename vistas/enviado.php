<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>¡Tu consulta fue recibida!</h1>

<?php

    $nombre = $_GET['nombre'];
    echo "Pronto nos pondremos en contacto," . $nombre . "<br/>";
    
?>    
</body>
</html>

