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
        for($i = 0; $i <= $_POST['numero']; $i++) 
            {
            echo $i . " ";
            }
    ?>
</body>
</html>