<?php
$suerte = isset($_POST['suerte']) ? (int)$_POST['suerte'] : 1;
$aleatorio = rand(1, 5);
$premio = 100 * $suerte * $aleatorio;
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Premio</title>
   <link rel="stylesheet" href="estilo.css">
</head>
<body class="pantalla-premio">
   <h1 class="titulo-p4"> Premio de Pitufina </h1>
  
   <div class="premio-grande-grande">
       <?php echo $premio; ?> Puntos
   </div>


   <?php if ($premio > 3000): ?>
       <div class="enhorabuena">
           ¡Enhorabuena de la buena!
       </div>
   <?php endif; ?>

   <form action="p4.php" method="POST" style="width: 100%; display: flex; justify-content: center;">
       <input type="hidden" name="suerte" value="<?php echo $suerte; ?>">
       <button type="submit" class="btn btn-reintentar">Probar suerte de nuevo</button>
   </form>
</body>
</html>
