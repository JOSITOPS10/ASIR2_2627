<?php
// Elegimos el numero de la tabla
$numero = rand(1, 10);

// Calculamos la tabla y la suma de los resultados
$tabla = [];
$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $tabla[$i] = $numero * $i;
    $suma = $suma + $tabla[$i];
}

// Miramos si la suma es par o impar
if ($suma % 2 == 0) {
    $tipo = "par";
} else {
    $tipo = "impar";
}

$resultado = "Número elegido: " . $numero . ".\n"
           . "La suma de la tabla es " . $suma . ".\n"
           . "La suma es " . $tipo . ".";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Partida</title>
<link rel="stylesheet" href="juego.css">
</head>
<body>

<div class="mesa">

    <h1>Tabla del <?php echo $numero; ?></h1>

    <table>
        <?php foreach ($tabla as $i => $total) { ?>
        <tr>
            <td><?php echo $numero; ?> x <?php echo $i; ?></td>
            <td><?php echo $total; ?></td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Otra tabla</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
