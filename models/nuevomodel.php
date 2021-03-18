<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO productos 
            (NOMBRE_PRODUCTO, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK, FECHA_CREACION)
            VALUES(:NOMBRE_PRODUCTO, :REFERENCIA, :PRECIO, :PESO, :CATEGORIA, :STOCK, :FECHA_CREACION)');

            $query->execute(['NOMBRE_PRODUCTO' => $datos['NombreProducto'], 'REFERENCIA' => $datos['Referencia'],
            'PRECIO' => $datos['Precio'],
            'PESO' => $datos['Peso'], 'CATEGORIA' => $datos['Categoria'], 'STOCK' => $datos['Stock'],
            'FECHA_CREACION' => $datos['FechaCreación']]);

            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        
    }
}

?>