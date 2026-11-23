<?php
$lados = ["Cara", "Cruz"];

$lanzamientos = [];
$caras = 0;
$cruces = 0;

// Lanzamos la moneda 10 veces
for ($i = 0; $i < 10; $i++) {
    $lado = $lados[rand(0, 1)];
    $lanzamientos[] = $lado;

    if ($lado == "Cara") {
        $caras++;
    } else {
        $cruces++;
    }
}

// Vemos que ha salido mas
if ($caras > $cruces) {
    $final = "Han salido más caras.";
} else if ($cruces > $caras) {
    $final = "Han salido más cruces.";
} else {
    $final = "Empate: han salido las mismas.";
}

$resultado = "Caras: " . $caras . "\nCruces: " . $cruces . "\n" . $final;
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

    <h1>Cara o Cruz</h1>

    <div class="jugador">
        <h2>Lanzamientos</h2>
        <?php foreach ($lanzamientos as $lado) { ?>
            <span class="dato" style="width:auto"><?php echo $lado; ?></span>
        <?php } ?>
    </div>

    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Lanzar otra vez</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
