<?php
// Cada jugador tira un dado
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

// Dibujos de las caras del dado (posicion 0 = cara del 1)
$caras = ["⚀", "⚁", "⚂", "⚃", "⚄", "⚅"];

$ganador = 0; // 0 = empate, 1 = jugador 1, 2 = jugador 2
$resultado = "Empate: los dos han sacado un " . $dado1 . ".";

if ($dado1 > $dado2) {
    $ganador = 1;
    $resultado = "Gana el Jugador 1. Ha sacado un " . $dado1 . " contra un " . $dado2 . ".";
}

if ($dado2 > $dado1) {
    $ganador = 2;
    $resultado = "Gana el Jugador 2. Ha sacado un " . $dado2 . " contra un " . $dado1 . ".";
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

    <h1>Duelo de Dados</h1>

    <div class="jugador <?php if ($ganador == 1) echo 'ganador'; ?>">
        <h2>Jugador 1</h2>
        <div class="grande"><?php echo $caras[$dado1 - 1]; ?></div>
        <p>Número: <?php echo $dado1; ?></p>
    </div>

    <div class="jugador <?php if ($ganador == 2) echo 'ganador'; ?>">
        <h2>Jugador 2</h2>
        <div class="grande"><?php echo $caras[$dado2 - 1]; ?></div>
        <p>Número: <?php echo $dado2; ?></p>
    </div>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Tirar otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
