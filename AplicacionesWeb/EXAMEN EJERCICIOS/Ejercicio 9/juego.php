<?php
$numeros = [];
$colores = [];

$rojos = 0;
$negros = 0;
$verdes = 0;
$dinero = 0;

// Giramos la ruleta 5 veces
for ($i = 0; $i < 5; $i++) {
    $numero = rand(0, 36);
    $numeros[] = $numero;

    // Miramos de que color es
    if ($numero == 0) {
        $color = "Verde";
        $verdes++;
        $dinero = $dinero - 10;
    } else if ($numero % 2 == 0) {
        $color = "Rojo";
        $rojos++;
        $dinero = $dinero + 10;
    } else {
        $color = "Negro";
        $negros++;
        $dinero = $dinero - 10;
    }

    $colores[] = $color;
}

$resultado = "Rojo: " . $rojos . " veces.\n"
           . "Negro: " . $negros . " veces.\n"
           . "Verde: " . $verdes . " veces.\n"
           . "Dinero final: " . $dinero . " €.";
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

    <h1>Ruleta</h1>

    <div class="jugador">
        <h2>Resultados (apuesta al Rojo)</h2>
        <?php foreach ($numeros as $i => $numero) { ?>
            <span class="dato" style="width:auto">
                <?php echo $numero; ?> - <?php echo $colores[$i]; ?>
            </span>
        <?php } ?>
    </div>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Girar otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
