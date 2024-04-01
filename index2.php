<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veterinarios</title>
</head>
<body>
    <h1>Lista de Veterinarios</h1>
    <?php
    // Incluye la función mostrarVeterinarios
    include("funciones.php");

    // Obtiene la lista de veterinarios en formato HTML
    $respuesta = mostrarVeterinarios();

    // Muestra la lista de veterinarios en la página
    echo $respuesta;
    ?>
</body>
</html>
