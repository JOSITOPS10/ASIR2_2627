<?php
// Recogemos el número de la suerte (tanto si viene de p3.php como si se recarga p4.php)
$suerte = isset($_POST['suerte']) ? (int)$_POST['suerte'] : 1;


// Generamos número aleatorio entre 1 y 5
$aleatorio = rand(1, 5);


// Cálculo del premio: 100 * nº de la suerte * aleatorio (1..5)
$premio = 100 * $suerte * $aleatorio;
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>El Premio de Papá Pitufo</title>
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="pantalla-premio">
   <h1 class="titulo-p4">🍄 El Gran Premio de Papá Pitufo 🍄</h1>
  
   <div class="premio-gigante">
       <?php echo $premio; ?> PTS
   </div>


   <?php if ($premio > 3000): ?>
       <div class="enhorabuena">
           ¡Enhorabuena de la buena!
       </div>
   <?php endif; ?>


   <!-- Formulario que recarga p4.php conservando el número de la suerte -->
   <form action="p4.php" method="POST" style="width: 100%; display: flex; justify-content: center;">
       <input type="hidden" name="suerte" value="<?php echo $suerte; ?>">
       <button type="submit" class="btn btn-reintentar">Probar suerte de nuevo</button>
   </form>
</body>
</html>


