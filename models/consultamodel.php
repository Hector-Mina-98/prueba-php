<?php

include_once 'models/producto.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT*FROM productos");

            while($row = $query->fetch()){
                $item = new Producto();
                $item->id                = $row[0];
                $item->NombreProducto    = $row['1'];
                $item->Referencia        = $row['2'];
                $item->Precio            = $row['3'];
                $item->Peso              = $row['4'];
                $item->Categoria         = $row['5'];
                $item->Stock             = $row['6'];
                $item->FechaCreación     = $row['7'];
                $item->FechaUltimaVenta  = $row['8'];

                array_push($items, $item);
            }

            return $items;
        }catch(PDOException $e){
            return [];
        }
    }


    public function getById($id) {
        $item = new Producto();

        $query = $this->db->connect()->prepare("SELECT*FROM productos WHERE id = :ID");
        try{

            $query->execute(['ID' => $id]);

            while($row = $query->fetch()){
                $item = new Producto();
                $item->id                = $row[0];
                $item->NombreProducto    = $row['1'];
                $item->Referencia        = $row['2'];
                $item->Precio            = $row['3'];
                $item->Peso              = $row['4'];
                $item->Categoria         = $row['5'];
                $item->Stock             = $row['6'];
            }

            return $item;
        }catch(PDOException $e){
            return [];
        }
    }

    public function update($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('UPDATE productos SET
            NOMBRE_PRODUCTO = :NOMBRE_PRODUCTO, REFERENCIA = :REFERENCIA, PRECIO = :PRECIO,
            PESO = :PESO, CATEGORIA = :CATEGORIA, STOCK = :STOCK');

            $query->execute(['NOMBRE_PRODUCTO' => $datos['NombreProducto'], 'REFERENCIA' => $datos['Referencia'],
            'PRECIO' => $datos['Precio'],
            'PESO' => $datos['Peso'], 'CATEGORIA' => $datos['Categoria'], 'STOCK' => $datos['Stock']]);

            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        
    }

    public function delete($id){
        try{
            $query = $this->db->connect()->prepare('DELETE FROM productos WHERE ID = :ID');

            $query->execute(['ID' => $id[0]]);

            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        
    }

}

?>