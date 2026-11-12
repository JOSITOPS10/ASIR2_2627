<?php
// Valores 
$valores = ["A", "K", "Q", "J", "10", "9", "8", "7", "6", "5", "4", "3", "2"];
$palos = ["P", "C", "T", "D"];

// Repartimos 5 cartas a cada jugador
$manos = [];
$ordenes = [];

for ($j = 1; $j <= 2; $j++) {
    $manos[$j] = [];
    $ordenes[$j] = [];

    for ($i = 0; $i < 5; $i++) {
        $valor = $valores[array_rand($valores)];
        $palo = $palos[array_rand($palos)];

        $manos[$j][] = $valor . $palo;                // nombre de la carta"
        $ordenes[$j][] = array_search($valor, $valores); // posicion (0 = A = la mas alta)
    }

    sort($ordenes[$j]); // de mayor a menor
}

// Comparamos carta a carta, de mayor a menor
$ganador = 0; // 0 = empate, 1 = jugador 1, 2 = jugador 2
$resultado = "Empate: las dos manos tienen las mismas cartas altas.";

for ($i = 0; $i < 5; $i++) {
    $a = $ordenes[1][$i];
    $b = $ordenes[2][$i];

    if ($a != $b) {
        $ganador = ($a < $b) ? 1 : 2;
        $perdedor = 3 - $ganador; // si gana el 1, pierde el 2 y al reves

        $resultado = "Gana el Jugador $ganador.\nLa carta " . ($i + 1) . " (de mayor a menor) decide: "
                   . $valores[$ordenes[$ganador][$i]] . " contra " . $valores[$ordenes[$perdedor][$i]] . ".";
        break;
    }
}
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

    <h1>Partida de Poker</h1>

    <?php foreach ($manos as $numero => $mano) { ?>
    <div class="jugador <?php if ($ganador == $numero) echo 'ganador'; ?>">
        <h2>Jugador <?php echo $numero; ?></h2>
        <div>
            <?php foreach ($mano as $nombre) { ?>
            <img class="carta" width="60" src="https://magicomagico.com/gilbertron/recursos/<?php echo $nombre; ?>.png" alt="<?php echo $nombre; ?>">
            <?php } ?>
        </div>
    </div>
    <?php 
    } ?>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Repartir otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>