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

    <?php if (isset($_GET['success'])) : ?>
        <div class="success">
            <p style="color: #FFF">Producto eliminado correctamente</p>
        </div>
    <?php endif; ?>

    <main class="eliminar">

        <a href="./" class="back">Atras</a>

        <form action="./models/delete.php" method="post">
            <label for="id">Seleccione el id el pedido a eliminar</label>
            <input id="id" type="number" name="id_pedido" required min="1">
            <button class="btn-submit">Eliminar</button>
        </form>
    </main>

    <script src="js/alert.js"></script>
</body>

</html>