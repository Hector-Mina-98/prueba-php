<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarProducto(){
        $NombreProducto = $_POST['nombre-producto'];
        $Referencia     = $_POST['referencia'];
        $Precio         = $_POST['precio'];
        $Peso           = $_POST['peso'];
        $Categoria      = $_POST['categoria'];
        $Stock          = $_POST['stock'];
        $FechaCreación  = date("Y-m-d H:i:s");

        $mensaje = "";

        if($this->model->insert(['NombreProducto' => $NombreProducto, 'Referencia' => $Referencia, 'Precio' => $Precio,
            'Peso' => $Peso, 'Categoria' => $Categoria, 'Stock' => $Stock, 'FechaCreación' => $FechaCreación])){
            $mensaje = "Nuevo producto creado";
        }else{
            $mensaje = "Hubo un error al crear el producto";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>