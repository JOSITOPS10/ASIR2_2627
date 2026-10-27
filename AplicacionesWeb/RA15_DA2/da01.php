<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
    <main>
        <h1>DADOS</h1>


        <form action="da02.php" method="post">
            <div class="campo">
                <label for="num_dados">Numero dados</label>
                <select name="num_dados" id="num_dados">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>


            <div class="campo">
                <label for="num_caras">Numero caras</label>
                <select name="num_caras" id="num_caras">
                    <option value="4">1</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="12">12</option>
                    <option value="20">20</option>
                </select>
            </div>

            <div class="campo">
                <label for="puntos_oponente">Puntos oponente</label>
                <input type="number" name="puntos_oponente" id="puntos_oponente" max="60" required>
            </div>

            <button type="submit">Suerte!!</button>
        </form>
    </main>
</body>
</html>


