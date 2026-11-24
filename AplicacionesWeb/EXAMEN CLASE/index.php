<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Paso 1</title>
   <link rel="stylesheet" href="estilo.css">
</head>
<body>
   <div class="contenedor">
       <h1>El Juego de Pitufina</h1>
       <form action="p2.php" method="POST">
           <div class="grupo-input">
               <label for="nombre">Nombre:</label>
               <input type="text" id="nombre" name="nombre" placeholder="Ej: Alberto" required>
           </div>


           <div class="grupo-input">
               <label for="apellidos">Apellidos:</label>
               <input type="text" id="apellidos" name="apellidos" placeholder="Ej: Guapo" required>
           </div>


           <button type="submit" class="btn">Continuar</button>
       </form>
   </div>
</body>
</html>