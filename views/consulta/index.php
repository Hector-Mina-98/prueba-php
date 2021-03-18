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
        <h1 class="center">Productos creados</h1>

        <table width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Producto</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Fecha de creación</th>
                    <th>Fecha de última venta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'models/producto.php';
                    foreach($this->productos as $row){
                        $producto = new Producto();
                        $producto = $row; 
                ?>
                <tr>
                    <td><?php echo $producto->id; ?></td>
                    <td><?php echo $producto->NombreProducto; ?></td>
                    <td><?php echo $producto->Referencia; ?></td>
                    <td><?php echo $producto->Precio; ?></td>
                    <td><?php echo $producto->Peso; ?></td>
                    <td><?php echo $producto->Categoria; ?></td>
                    <td><?php echo $producto->Stock; ?></td>
                    <td><?php echo $producto->FechaCreación; ?></td>
                    <td><?php echo $producto->FechaUltimaVenta; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verProducto/' . $producto->id; ?>">Editar</a>  </td>
                    <td><a href="<?php echo constant('URL') . 'consulta/eliminarProducto/' . $producto->id; ?>">Eliminar</a> </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
        
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>