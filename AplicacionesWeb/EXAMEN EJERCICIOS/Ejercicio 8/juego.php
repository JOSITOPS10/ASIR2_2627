<?php
$nombres = ["Ana", "Luis", "Marta", "Pablo", "Lucía"];

$notas = [];
$suma = 0;
$aprobados = 0;
$mejor = 0; // posicion del alumno con mejor nota

// Ponemos una nota a cada alumno
for ($i = 0; $i < 5; $i++) {
    $notas[$i] = rand(0, 10);
    $suma = $suma + $notas[$i];

    if ($notas[$i] >= 5) {
        $aprobados++;
    }

    if ($notas[$i] > $notas[$mejor]) {
        $mejor = $i;
    }
}

$media = $suma / 5;

$resultado = "La mejor nota es de " . $nombres[$mejor] . " con un " . $notas[$mejor] . ".\n"
           . "La nota media es " . $media . ".\n"
           . "Han aprobado " . $aprobados . " alumnos de 5.";
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

    <h1>Notas del Examen</h1>

    <table>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($notas as $i => $nota) { ?>
        <tr>
            <td><?php echo $nombres[$i]; ?></td>
            <td><?php echo $nota; ?></td>
            <td>
                <?php
                if ($nota >= 5) {
                    echo "Aprobado";
                } else {
                    echo "Suspendido";
                }
                ?>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <textarea readonly><?php echo $resultado; ?></textarea>

    <div class="botones">
        <a href="juego.php" class="boton">Nuevo examen</a>
        <a href="index.php" class="boton">Volver</a>
    </div>

</div>

</body>
</html>
