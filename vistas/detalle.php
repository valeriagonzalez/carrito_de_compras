<!DOCTYPE html>
<?php

include '../dao/metodosDao.php';

$cod=$_REQUEST['cod'];

$objMetodo = new metodosDao();
$lista = $objMetodo->listarProductosCod($cod);

foreach ($lista as $row){
$nombre = $row[1];
$precio = $row[2];
$detalle = $row[5];

}
echo $cod;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <table border="0">
                <tr>
                    <th rowspan="4"><img src="../imagenes/<?php echo $nombre; ?>.jpg"
                                     width="200" height="170"></th>
                    <th><?php echo $nombre; ?></th>
                </tr>
                <tr>
                    <td align="justify"><?php echo $detalle; ?></td>
                </tr>
                <tr>
                    <td align="right">S/. <?php echo $precio; ?></td>
                </tr>
                <tr>
                    <td align="right">Ingrese Cantidad: <input type="number" 
                                                 min="1" max="100" value="1" name="txtCan"></td>
                </tr>
                <tr>
                    <th align="right" colspan="2">
                        <button type="button" class="btn btn-secondary">Cerrar</button>
                        <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                    </th>
                </tr>
                
            </tabl
            
            
        </form>
    </body>
</html>
