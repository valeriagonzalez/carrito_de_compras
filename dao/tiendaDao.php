<?php

session_start();

include './metodosDao.php';

$op=$_REQUEST['op'];

switch ($op){
    case 1:
        unset($_SESSION['lista']);
        $objMetodo=new metodosDao();
        $lista=$objMetodo->ListarProductos();
        $_SESSION['lista']=$lista;
        header("Location:../vistas/catalogo.php");
        break;
    case 2;
        break;
}
?>

