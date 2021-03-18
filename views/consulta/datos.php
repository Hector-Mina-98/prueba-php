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
        <h1 class="center">Datos del producto <?php echo $this->producto->id ?></h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarProducto" method="POST">

            <p>
                <label for="id">Id</label><br>
                <input type="text" name="id" value="<?php echo $this->producto->id ?>" required disabled>
            </p>
            <p>
                <label for="nombre-producto">Nombre del Producto</label><br>
                <input type="text" name="nombre-producto" value="<?php echo $this->producto->NombreProducto ?>" required>
            </p>
            <p>
                <label for="referencia">Referencia</label><br>
                <input type="text" name="referencia" value="<?php echo $this->producto->Referencia ?>" required>
            </p>
            <p>
                <label for="precio">Precio</label><br>
                <input type="text" name="precio" value="<?php echo $this->producto->Precio ?>" required>
            </p>
            <p>
                <label for="peso">Peso</label><br>
                <input type="text" name="peso" value="<?php echo $this->producto->Peso ?>" required>
            </p>
            <p>
                <label for="categoria">Categoría</label><br>
                <input type="text" name="categoria" value="<?php echo $this->producto->Categoria ?>" required>
            </p>
            <p>
                <label for="stock">Stock</label><br>
                <input type="text" name="stock" value="<?php echo $this->producto->Stock ?>" required>
            </p>

            <p>
            <input type="submit" value="Guardar cambios">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>