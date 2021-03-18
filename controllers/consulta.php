<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->productos = [];
        
        
    }

    function render(){
        $productos = $this->model->get();
        $this->view->productos = $productos;
        $this->view->render('consulta/index');
    }

    function verProducto ($parametros = null) {
        $id = $parametros[0];
        $producto = $this->model->getById($id);
        $this->view->producto = $producto;
        $this->view->mensaje = "";
        $this->view->render('consulta/datos');
    }

    function actualizarProducto () {
        $NombreProducto = $_POST['nombre-producto'];
        $Referencia     = $_POST['referencia'];
        $Precio         = $_POST['precio'];
        $Peso           = $_POST['peso'];
        $Categoria      = $_POST['categoria'];
        $Stock          = $_POST['stock'];

        $mensaje = "";

        if($this->model->update(['NombreProducto' => $NombreProducto, 'Referencia' => $Referencia, 'Precio' => $Precio,
            'Peso' => $Peso, 'Categoria' => $Categoria, 'Stock' => $Stock])){
            $mensaje = "Producto editado exitosamente";
        }else{
            $mensaje = "Hubo un error al editar el producto";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }

    function eliminarProducto($id) {
        $this->model->delete($id);
    }

}

?>