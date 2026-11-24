<?php
// Recogemos todos los datos de p2.php
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
$apellidos = isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '';
$edad = isset($_POST['edad']) ? htmlspecialchars($_POST['edad']) : '';
$suerte = isset($_POST['suerte']) ? (int)$_POST['suerte'] : 1;
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>El Censo de Papá Pitufo - Resumen</title>
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
   <div class="contenedor">
       <h1>🍄 Resumen Pitufal de Papá Pitufo 🍄</h1>
      
       <ol class="lista-romana">
           <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
           <li><strong>Apellidos:</strong> <?php echo $apellidos; ?></li>
           <li><strong>Edad:</strong> <?php echo $edad; ?> años</li>
           <li><strong>Nº de la suerte:</strong> <?php echo $suerte; ?></li>
       </ol>


       <form action="p4.php" method="POST">
           <!-- Pasamos el número de la suerte oculto para el cálculo en p4.php -->
           <input type="hidden" name="suerte" value="<?php echo $suerte; ?>">
           <button type="submit" class="btn">🍀 Suerte 🍀</button>
       </form>
   </div>
</body>
</html>
