<?php

class conexionDB {
public function getConexion(){
 $cnx = new PDO("mysql:host=127.0.0.1:3307;dbname=tiendazionpc","root","");
return $cnx;
}
}
?>