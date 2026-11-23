<?php
// Valores y palos de la baraja (el valor de la carta es su posicion + 1)
$valores = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
$palos = ["Picas", "Corazones", "Tréboles", "Diamantes"];

$manos = [];
$puntos = [];

// Repartimos 3 cartas a cada jugador
for ($j = 1; $j <= 2; $j++) {
    $manos[$j] = [];
    $puntos[$j] = 0;

    for ($i = 0; $i < 3; $i++) {
        $posicion = array_rand($valores);
        $palo = $palos[array_rand($palos)];

        $manos[$j][] = $valores[$posicion] . " de " . $palo;
        $puntos[$j] = $puntos[$j] + ($posicion + 1);
    }
}

// Comparamos las sumas
$ganador = 0; // 0 = empate, 1 = jugador 1, 2 = jugador 2
$resultado = "Empate: los dos suman " . $puntos[1] . " puntos.";

if ($puntos[1] > $puntos[2]) {
    $ganador = 1;
    $resultado = "Gana el Jugador 1 con " . $puntos[1] . " puntos contra " . $puntos[2] . ".";
}

if ($puntos[2] > $puntos[1]) {
    $ganador = 2;
    $resultado = "Gana el Jugador 2 con " . $puntos[2] . " puntos contra " . $puntos[1] . ".";
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

    <h1>Suma de Cartas</h1>

    <?php foreach ($manos as $numero => $mano) { ?>
    <div class="jugador <?php if ($ganador == $numero) echo 'ganador'; ?>">
        <h2>Jugador <?php echo $numero; ?></h2>
        <div>
            <?php foreach ($mano as $nombre) { ?>
                <span class="dato" style="width:auto"><?php echo $nombre; ?></span>
            <?php } ?>
        </div>
        <p>Puntos: <?php echo $puntos[$numero]; ?></p>
    </div>
    <?php } ?>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Repartir otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
