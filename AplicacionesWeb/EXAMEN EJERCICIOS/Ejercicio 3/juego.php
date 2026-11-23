<?php
// Sacamos 6 numeros del 1 al 49
$numeros = [];

for ($i = 0; $i < 6; $i++) {
    $numeros[] = rand(1, 49);
}

// Buscamos el mayor, el menor y la suma
$mayor = $numeros[0];
$menor = $numeros[0];
$suma = 0;

foreach ($numeros as $n) {
    if ($n > $mayor) {
        $mayor = $n;
    }
    if ($n < $menor) {
        $menor = $n;
    }
    $suma = $suma + $n;
}

$resultado = "El número mayor es el " . $mayor . ".\n"
           . "El número menor es el " . $menor . ".\n"
           . "La suma de todos es " . $suma . ".";
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

    <h1>Lotería</h1>

    <div class="jugador">
        <h2>Tus números</h2>
        <?php foreach ($numeros as $numero) { ?>
            <span class="dato"><?php echo $numero; ?></span>
        <?php } ?>
    </div>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Sacar otros números</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
