<?php
$manos = [];
$puntos = [];

// Repartimos 7 fichas a cada jugador
for ($j = 1; $j <= 2; $j++) {
    $manos[$j] = [];
    $puntos[$j] = 0;

    for ($i = 0; $i < 7; $i++) {
        $izquierda = rand(0, 6);
        $derecha = rand(0, 6);

        $manos[$j][] = "[" . $izquierda . "|" . $derecha . "]";
        $puntos[$j] = $puntos[$j] + $izquierda + $derecha;
    }
}

// Gana el que tenga MENOS puntos
$ganador = 0; // 0 = empate
$resultado = "Empate: los dos tienen " . $puntos[1] . " puntos.";

if ($puntos[1] < $puntos[2]) {
    $ganador = 1;
    $resultado = "Gana el Jugador 1 con " . $puntos[1] . " puntos contra " . $puntos[2] . ".";
}

if ($puntos[2] < $puntos[1]) {
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

    <h1>Dominó</h1>

    <?php foreach ($manos as $numero => $mano) { ?>
    <div class="jugador <?php if ($ganador == $numero) echo 'ganador'; ?>">
        <h2>Jugador <?php echo $numero; ?></h2>
        <div>
            <?php foreach ($mano as $ficha) { ?>
                <span class="dato" style="width:auto"><?php echo $ficha; ?></span>
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
