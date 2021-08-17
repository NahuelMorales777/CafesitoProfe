<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <main class="ver">
    <a href="./" class="back">Atras</a>
        <h1>Todos los pedidos realizados</h1>
        
        <?php
        include('./config/app.php');
        include('./clases/Pedido.php');

        Pedido::cargarPedidos($db);
        ?>


    </main>
</body>

</html>