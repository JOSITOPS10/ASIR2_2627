<?php
$num_dados = $_POST['num_dados'];
$num_caras = $_POST['num_caras'];
$vida = $_POST['puntos_oponente'];
$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado</title>
<link rel="stylesheet" href="css2.css">
</head>
<body>
<main>
<h1>RESULTADO</h1>

<?php
for ($i = 1; $i <= $num_dados; $i++) {
    $tirada = rand(1, $num_caras);
    $total = $total + $tirada;
    echo "<div class='dado d$num_caras'>$tirada</div>"; /*Esto lo he tenido que modificar para meter el polygonal para la forma de los datos, lo he hecho con ayuda de la ia */
}

if ($total >= $vida) {
    $vida = 0;
    $mensaje = "¡GANAS!";
} else {
    $vida = $vida - $total;
    $mensaje = "¡PIERDES!";
}
?>

<p>Daño total: <strong><?= $total ?></strong></p>
<p>Vida del oponente: <strong><?= $vida ?></strong></p>
<h2><?= $mensaje ?></h2>

<a href="da01.php">Volver a jugar</a>
</main>
</body>
</html>