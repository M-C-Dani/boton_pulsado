<?php

$submitPresionado = isset($_POST['submit']) ? $_POST['submit'] : 'Ninguno';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<form action="./index.php" method="post">
<fieldset>
    <legend>Opciones</legend>
    <input type="submit" value="Ver" name="submit">
    <input type="submit" value="Insertar" name="submit">
    <input type="submit" value="Borrar" name="submit">
    <input type="submit" value="Consultar" name="submit">
    <input type="submit" value="Editar" name="submit">
    </fieldset>
</form>
<h1>
    <?php echo "Submit presionado: $submitPresionado"; ?>
</h1>
</body>
</html>

