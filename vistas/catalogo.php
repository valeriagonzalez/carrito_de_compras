<!DOCTYPE html>
<?php
session_start();

$lista=$_SESSION['lista'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>
        <!--.---------------navbar-------------->
     
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <a class="navbar-brand" href="home.php"><img src="../imagenes/logo.jpg" width="50" height="50"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarTogglerDemo02" position="fixed">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             <li class="nav-item">
                 <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home |<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="catalogo.php"><i class="fas fa-cogs"></i> Servicios | </a>
                 
             </li>
             <li class="nav-item">
               <a class="nav-link" href="contacto.php"><i class="far fa-address-card"></i> Contacto</a>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
           </form>
         </div>
       </nav>
        
    <!--.---------------migajas de  pan-------------->
   
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Servicios</li>
          </ol>
        </nav>
   <!--fin migajas-->
   <div class="container">
        <div class="table-responsive-sm table-responsive-md table-resposive-lg">
            <h2 align="center">SERVICIOS</h2>
              <table border="0" width="700" align="center" class="table ">
                <tr align="center" class="table-responsive-sm table-responsive-md table-resposive-lg">
                <div class="alert alert-success">
                  <p align="center">0 productos agregados!</p><a href="#" class="alert-link" align="center">Ver <i class="fas fa-cart-plus"></i></a>.
                </div>
                <?php
                $num=0;
                foreach ($lista as $reg){
                    if($num == 3){
                      echo "<tr align='center'>";
                        $num=1;
                    }else{
                        $num++;
                    }
                    ?>
                <th class="table-responsive-sm table-responsive-md table-resposive-lg"><img src="../imagenes/<?php echo $reg[6];?>" width="120" height="120">
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            onclick="enviar(<?php echo $reg[0]; ?>)">Agregar</button>
                </th>
      
                <?php
                }
                ?>
              </table>
          </div>
   </div>           
            <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detalle de Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body" id="mostrar">
            ...
          </div>
          
        </div>
      </div>
    </div>
     <!-------------footer------------->
     <div class="cambio-card-deck">
        <div class="card-header"></div>
        <p class="msj">Envíanos un WhatsApp!</p>
        <a href="https://api.whatsapp.com/send?phone=541134159411"><img class="whts" src="../imagenes/whatsapp.png" width="20px" height="20px" class="whatsapp"></a>
    </div>
     <a href="#" class="cambio-btn-footer btn btn-primary"> Volver </a>
     
     <!------------script----------->
        <script>
            var resultado = document.getElementById("mostrar");
            function enviar(c){
                
                var xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp= new XMLHttpRequest();
                }else {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        resultado.innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "detalle.php?cod="+c, true);
                xmlhttp.send();
            }
        </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
