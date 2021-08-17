<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Document</title>
</head>

<body>
    <main class="ver">
        <h1>Todos los pedidos realizados</h1>


        <form action="" class="form-ver" method="POST">
            <p>Seleccionar pedidos entre determinadas fechas</p>

            <label for="">Desde</label>
            <input name="desde" type="date" required>

            <label for="">Hasta</label>
            <input name="hasta" type="date" required>

            <button class="btn-submit">Buscar</button>
            <a href="./ver.php">Mostrar todos</a>
        </form>

        <?php

        include('./config/app.php');
        include('./clases/Pedido.php');
        
        if(isset($_POST['desde']) && isset($_POST['hasta'])) {

            Pedido::cargarPedidosFecha($_POST['desde'], $_POST['hasta'], $db);
        }

     
        ?>


    </main>
</body>

</html>