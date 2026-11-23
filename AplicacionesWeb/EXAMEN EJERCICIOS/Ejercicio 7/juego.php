<?php
$dados = [];
$sumas = [];

// Cada jugador tira 3 dados
for ($j = 1; $j <= 2; $j++) {
    $dados[$j] = [];
    $sumas[$j] = 0;

    for ($i = 0; $i < 3; $i++) {
        $dado = rand(1, 6);
        $dados[$j][] = $dado;
        $sumas[$j] = $sumas[$j] + $dado;
    }
}

// Comparamos las sumas
$ganador = 0; // 0 = empate
$resultado = "Empate: los dos suman " . $sumas[1] . ".";

if ($sumas[1] > $sumas[2]) {
    $ganador = 1;
    $resultado = "Gana el Jugador 1 con " . $sumas[1] . " contra " . $sumas[2] . ".";
}

if ($sumas[2] > $sumas[1]) {
    $ganador = 2;
    $resultado = "Gana el Jugador 2 con " . $sumas[2] . " contra " . $sumas[1] . ".";
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

    <h1>Tres Dados</h1>

    <?php foreach ($dados as $numero => $tirada) { ?>
    <div class="jugador <?php if ($ganador == $numero) echo 'ganador'; ?>">
        <h2>Jugador <?php echo $numero; ?></h2>
        <div>
            <?php foreach ($tirada as $dado) { ?>
                <span class="dato"><?php echo $dado; ?></span>
            <?php } ?>
        </div>
        <p>Suma: <?php echo $sumas[$numero]; ?></p>
    </div>
    <?php } ?>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Tirar otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
