<?php

    if(empty($_POST)) {
        header('Location: /');
    }

    $producto = $_POST['producto'];
    $precio_unitario = $_POST['precio_unitario'];
    $descripcion = $_POST['descripcion'];
?>


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
    <main class="articulo">

        <div class="articulo__img"></div>

        <div class="article__container">

            <h1 class="article__heading"><?php echo $producto ?></h1>
            <p class="article__descripcion"><?php echo $descripcion ?></p>
            <p class="article__subtitle">Ingrese su nombre y apellido y tambien ingrese a su vendedor</p>

            <div class="contenedor-precios">
                <p class="artice__precio">$<?php echo $precio_unitario ?></p>

                <div class="cantidad-container">
                    <span id="restar" class="cantidad-simbolo">-</span>
                    <input id="cantidad" class="cantidad" type="text" minlength="1" value="1" readonly>
                    <span id="sumar" class="cantidad-simbolo">+</span>
                </div>
            </div>

            <form action="./models/create.php" method="POST" class="form-carrito">
                <input name="nombre" type="text" placeholder="Nombre" required>
                <input name="apellido" type="text" placeholder="Apellido" required>
                <input name="cantidad" id="cantidad-resultado" type="hidden" value="1">
                <input name="precio" type="number" value="<?php echo $precio_unitario ?>" hidden>
                <input name="producto" type="text" value="<?php echo $producto ?>" hidden>

                <select name="vendedor">
                    <option value="null">Seleccione un vendedor</option>
                    <option value="1">Lionel Messi</option>
                    <option value="2">Richard Pias</option>
                    <option value="3">Juan Danubio Zalayeta</option>
                </select>

                <button class="btn-submit">Comprar</button>
            </form>

        </div>

    </main>

    <script src="/js/cantidad.js"></script>
</body>

</html>