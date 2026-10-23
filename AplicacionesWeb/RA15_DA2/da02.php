<?php
$num_dados = (int) ($_POST['num_dados'] ?? 0);
$num_caras = (int) ($_POST['num_caras'] ?? 0);
$puntos_oponente = (int) ($_POST['puntos_oponente'] ?? -1);

$valido = $num_dados >= 1 && $num_dados <= 3
       && in_array($num_caras, [4, 6, 8, 10, 12, 20])
       && $puntos_oponente >= 0;

$resultado = 0;
if ($valido) {
    for ($i = 0; $i < $num_dados; $i++) {
        $tiradas[] = random_int(1, $num_caras);
    }
    $total = array_sum($tiradas);
    $gana = $total > $puntos_oponente;
}

for ($i=1; $i <=$num_dados ; $i++) { 
    $tiradas = random_int(1, $num_caras);
    $resultado += $tiradas;
    echo "";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado</title>
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="css2.css">
</head>
<body>
<main>
    
<h1>RESULTADO</h1>

<?php if (!$valido): ?>
    <p class="error">Datos no validos.</p>
<?php else: ?>
    <div class="dados">
        <?php foreach ($tiradas as $t): ?>
            <span class="dado"><?= $t ?></span>
        <?php endforeach; ?>
    </div>
    <p class="total">Tu total: <strong><?= $total ?></strong></p>
    <p>Oponente: <strong><?= $puntos_oponente ?></strong></p>
    <p class="mensaje <?= $gana ? 'gana' : 'pierde' ?>">
        <?= $gana ? 'Has ganado!!' : 'Has perdido!!' ?>
    </p>
<?php endif; ?>
<a class="volver" href="da01.php">Volver a jugar</a>
</main>
</body>
</html>
