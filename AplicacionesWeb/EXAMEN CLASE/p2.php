<?php

$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
$apellidos = isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '';

?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Paso 2</title>
   <link rel="stylesheet" href="estilo.css">
</head>
<body>
   <div class="contenedor">
       <h1>Datos de Pitufina</h1>
       <form action="p3.php" method="POST">
           <div class="grupo-input">
               <label for="nombre">Nombre:</label>
               <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" readonly>
           </div>


           <div class="grupo-input">
               <label for="apellidos">Apellidos:</label>
               <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" readonly>
           </div>


           <div class="grupo-input">
               <label for="edad">Edad:</label>
               <input type="number" id="edad" name="edad" min="1" max="999" placeholder="Introduce tu edad pitufal" required>
           </div>


           <div class="grupo-input">
               <label for="suerte">Nº de la suerte (entre 1 y 9):</label>
               <input type="number" id="suerte" name="suerte" min="1" max="9" placeholder="Del 1 al 9" required>
           </div>

           <button type="submit" class="btn">Continuar</button>
       </form>
   </div>
</body>
</html>