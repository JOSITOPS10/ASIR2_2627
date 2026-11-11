<?php
// Valores ordenados de MAYOR a MENOR (la posicion en la lista es la fuerza)
$valores = ["A", "K", "Q", "J", "10", "9", "8", "7", "6", "5", "4", "3", "2"];
$palos = ["P", "C", "T", "D"];

// Reparte 5 cartas aleatorias (se pueden repetir)
function repartirMano($valores, $palos) {
    $mano = [];
    for ($i = 0; $i < 5; $i++) {
        $mano[] = [
            "valor" => $valores[rand(0, 12)],
            "palo"  => $palos[rand(0, 3)]
        ];
    }
    return $mano;
}

// Devuelve las posiciones de las cartas ordenadas de mayor a menor
function ordenarMano($mano, $valores) {
    $posiciones = [];
    foreach ($mano as $carta) {
        $posiciones[] = array_search($carta["valor"], $valores);
    }
    sort($posiciones); // posicion 0 = A = la mas alta
    return $posiciones;
}

$mano1 = repartirMano($valores, $palos);
$mano2 = repartirMano($valores, $palos);

$orden1 = ordenarMano($mano1, $valores);
$orden2 = ordenarMano($mano2, $valores);

// Comparamos carta a carta, de mayor a menor
$ganador = 0; // 0 = empate, 1 = jugador 1, 2 = jugador 2
$resultado = "Empate: las dos manos tienen las mismas cartas altas.";

for ($i = 0; $i < 5; $i++) {
    if ($orden1[$i] < $orden2[$i]) {
        $ganador = 1;
        $resultado = "Gana el Jugador 1.\nLa carta " . ($i + 1) . " (de mayor a menor) decide: " . $valores[$orden1[$i]] . " contra " . $valores[$orden2[$i]] . ".";
        break;
    }
    if ($orden2[$i] < $orden1[$i]) {
        $ganador = 2;
        $resultado = "Gana el Jugador 2.\nLa carta " . ($i + 1) . " (de mayor a menor) decide: " . $valores[$orden2[$i]] . " contra " . $valores[$orden1[$i]] . ".";
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

        <div class="jugador <?php if ($ganador == 1) { echo 'ganador'; } ?>">
            <h2>Jugador 1</h2>
            <div class="mano">
                <?php foreach ($mano1 as $carta) { ?>
                    <img class="carta" width="60" src="https://magicomagico.com/gilbertron/recursos/<?php echo $carta["valor"] . $carta["palo"]; ?>.png" alt="<?php echo $carta["valor"] . $carta["palo"]; ?>">
                <?php } ?>
            </div>
        </div>

        <div class="jugador <?php if ($ganador == 2) { echo 'ganador'; } ?>">
            <h2>Jugador 2</h2>
            <div class="mano">
                <?php foreach ($mano2 as $carta) { ?>
                    <img class="carta" width="60" src="https://magicomagico.com/gilbertron/recursos/<?php echo $carta["valor"] . $carta["palo"]; ?>.png" alt="<?php echo $carta["valor"] . $carta["palo"]; ?>">
                <?php } ?>
            </div>
        </div>

        <textarea readonly><?php echo $resultado; ?></textarea>

        <div class="botones">
            <a href="juego.php" class="boton">Repartir otra vez</a>
            <a href="index.php" class="boton">Volver</a>
        </div>

    </div>

</body>
</html>