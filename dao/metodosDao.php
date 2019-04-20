<?php

include '../utils/conexionDB.php';

class metodosDao {
   
    public function ListarProductos(){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from productos");
        $res->execute();
        
        foreach($res as $row){
            $lista[]=$row;
        }
        return $lista;
}

    public function ListarProductosCod($cod){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from productos where codProd=$cod");
        $res->execute();
        
        foreach($res as $row){
            $lista[]=$row;
        }
        return $lista;
}

}

?>