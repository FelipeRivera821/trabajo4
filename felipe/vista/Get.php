<?php

// Verificar si se ha enviado el formulario utilizando el método GET
if ($_SERVER["REQUEST_METHOD"] == "get") {
    // Obtener el valor del parámetro "nombre" enviado a través de GET
    $nombre = $_get["nombre"];
    // Realizar alguna operación con el nombre recibido
    $saludo = "¡Hola, " . $nombre . "!";

    // Mostrar el saludo en pantalla
    echo $saludo;
}

// Verificar si se ha enviado el formulario utilizando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo "nombre" enviado a través de POST
    $nombre = $_POST["nombre"];

    // Realizar alguna operación con el nombre recibido
    $saludo = "¡Hola, " . $nombre . "!";

    // Mostrar el saludo en pantalla
    echo $saludo;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="submit" value="Saludar con GET">
    </form>
    <hr>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="submit" value="Saludar con POST">
    </form>
</body>
</html>