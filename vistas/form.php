<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar form de get con php</title>
</head>
<body>
    <h1>¡Tu consulta fue recibida!</h1>

    <?php

    $nombre = $_POST['nombre'];
    echo $nombre . " en la brevedad nos pondremos en contacto<br/>";
    
    ?>
</body>
</html>