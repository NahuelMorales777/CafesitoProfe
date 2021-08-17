<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Inicio</title>
</head>

<body>

    <header class="header">
    <?php if (isset($_GET['success'])) : ?>
        <div class="success">
            <p>Producto ingresado correctamente</p>
        </div>
    <?php endif; ?>

        <h1 class="header__heading">Eliga la opcion que desea</h1>

        <div class="header__btn-container">
            <a href="#pro0ductos" class=header__btn>Productos</a>
            <a href="eliminar.php" class="header__btn">Eliminar</a>
            <a href="ver.php" class="header__btn">Ver</a>
        </div>
    </header>

    <main class="main">
        <a name="pro0ductos">
        <h2 class="main__heading">Seleccione el producto que desea comprar</h2>

        <article class="producto">

            <div class="producto__img-container">
                <img class="producto__img" src="img/producto1.jpg" alt="Producto_1">
            </div>

            <div class="producto__contenido">
                <h2 class="producto__heading"><u>CAFE NEGRO</u></h2>
                <span class="producto__subtitle">Cafe Duro como la roca</span>

                <p class="producto__texto">¿Te gustaria un cafe que te despierte por las mañanas? Este es el tuyo .</p>

                <form action="producto.php" method="post">
                    <input hidden name="descripcion" type="text" value="Cafe Duro como la roca .">
                    <input name="producto" type="text" value="Cafe Negro" hidden>
                    <input name="precio_unitario" type="text" value="95" hidden>
                    <button class="producto__comprar">Comprar</button>
                </form>
            </div>
        </article>

        <article class="producto">

            <div class="producto__contenido">
                <h2 class="producto__heading"><u>Cafe Modka</u></h2>
                <span class="producto__subtitle">Un Poco de Leche , un poco de espuma , un poco de chocolate y un poco de cafe</span>

                <p class="producto__texto">Nunca viene mal un poco de todo ¿no? este es cafe te va a encantar </p>

                <form action="producto.php" method="post">
                    <input hidden name="descripcion" type="text" value="Nunca viene mal un poco de todo ¿no? este es cafe te va a encantar.">
                    <input name="producto" type="text" value="Cafe Modka" hidden>
                    <input name="precio_unitario" type="text" value="140" hidden>
                    <button class="producto__comprar">Comprar</button>
                </form>
            </div>


            <div class="producto__img-container">
                <img class="producto__img" src="img/producto2.jpg" alt="Producto_1">
            </div>

        </article>

        <article class="producto">

            <div class="producto__img-container">
                <img class="producto__img" src="img/producto3.jpg" alt="Producto_1">
            </div>

            <div class="producto__contenido">
                <h2 class="producto__heading"><u>CAFE CON HIELO</u></h2>
                <span class="producto__subtitle">Eres amante del cafe pero hace 50° ¡No te preocupes!</span>

                <p class="producto__texto">Un buen cafe con hielos siempre viene bien para refrescarse un poco!</p>

                <form action="producto.php" method="post">
                    <input hidden name="descripcion" type="text" value="Un buen cafe con hielos siempre viene bien para refrescarse un poco!.">
                    <input name="producto" type="text" value="Cafe con hielo" hidden>
                    <input name="precio_unitario" type="text" value="30" hidden>
                    <button class="producto__comprar">Comprar</button>
                </form>
            </div>
        </article>

        <footer>
            <p>Pagina creada por Facundo Morales</p>
        </footer>
    </main>

    <script src="js/alert.js"></script>
</body>

</html>