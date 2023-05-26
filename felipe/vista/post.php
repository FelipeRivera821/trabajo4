<?php

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo "nombre" enviado a través de REQUEST
    $nombre = $_REQUEST["nombre"];

    // Realizar alguna operación con el nombre recibido
    $saludo = "¡Hola, " . $nombre . "!";

    // Establecer la respuesta (RESPONSE) como un encabezado HTTP
    header("Mi-Encabezado: " . $saludo);
    exit(); // Detener la ejecución del código para enviar el encabezado inmediatamente
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>