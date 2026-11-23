<?php
// Las tres opciones (0 = Piedra, 1 = Papel, 2 = Tijera)
$opciones = ["Piedra", "Papel", "Tijera"];

// Cada uno elige una opcion al azar
$jugador = rand(0, 2);
$maquina = rand(0, 2);

$ganador = 0; // 0 = empate, 1 = jugador, 2 = maquina

if ($jugador == $maquina) {
    $ganador = 0;
} else if ($jugador == 0 && $maquina == 2) {
    $ganador = 1; // piedra gana a tijera
} else if ($jugador == 1 && $maquina == 0) {
    $ganador = 1; // papel gana a piedra
} else if ($jugador == 2 && $maquina == 1) {
    $ganador = 1; // tijera gana a papel
} else {
    $ganador = 2; // en cualquier otro caso gana la maquina
}

if ($ganador == 0) {
    $resultado = "Empate: los dos han elegido " . $opciones[$jugador] . ".";
} else if ($ganador == 1) {
    $resultado = "Gana el Jugador. " . $opciones[$jugador] . " gana a " . $opciones[$maquina] . ".";
} else {
    $resultado = "Gana la Máquina. " . $opciones[$maquina] . " gana a " . $opciones[$jugador] . ".";
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

    <h1>Piedra, Papel o Tijera</h1>

    <div class="jugador <?php if ($ganador == 1) echo 'ganador'; ?>">
        <h2>Jugador</h2>
        <p class="grande"><?php echo $opciones[$jugador]; ?></p>
    </div>

    <div class="jugador <?php if ($ganador == 2) echo 'ganador'; ?>">
        <h2>Máquina</h2>
        <p class="grande"><?php echo $opciones[$maquina]; ?></p>
    </div>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Jugar otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
