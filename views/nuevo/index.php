<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Agregar Nuevo Producto</h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>nuevo/registrarProducto" method="POST">

            <p>
                <label for="nombre-producto">Nombre del Producto</label><br>
                <input type="text" name="nombre-producto" id="" required>
            </p>
            <p>
                <label for="referencia">Referencia</label><br>
                <input type="text" name="referencia" id="" required>
            </p>
            <p>
                <label for="precio">Precio</label><br>
                <input type="text" name="precio" id="" required>
            </p>
            <p>
                <label for="peso">Peso</label><br>
                <input type="text" name="peso" id="" required>
            </p>
            <p>
                <label for="categoria">Categoría</label><br>
                <input type="text" name="categoria" id="" required>
            </p>
            <p>
                <label for="stock">Stock</label><br>
                <input type="text" name="stock" id="" required>
            </p>

            <p>
            <input type="submit" value="Registrar producto">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>