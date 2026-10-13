<!DOCTYPE html>
<html lang="en">
    <?php 
        var_export($_POST);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $boton = $_POST['boton'];
        $acumulador = 0;
        $producto = 1;
        $pares = 0; 
        for ($i = 1; $i <  $_POST['numero']; $i++) 
            {
                echo $i. " ";
                $acumulador = $acumulador + $i;
                $producto = $producto * $i;
                $pares = $pares + ($i % 2 == 0 ? $i : 0);   
            }

        if ($boton==="sumatorio") 
        {
            echo "El resultado es:".$acumulador;
        }   
        else if ($boton==="producto")
        {
            echo "El producto es:".$producto;
        }
        else if ($boton==="pares")
        {
            echo "Los pares son:".$pares;
        }

    ?>
</body>
</html>