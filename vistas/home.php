<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>
        <!---------navbar------------>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <a class="navbar-brand" href="home.php"><img src="../imagenes/logo.jpg" width="50" height="50"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarTogglerDemo02" position="fixed">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             <li class="nav-item">
                 <a class="nav-link" href="#"><i class="fas fa-home"></i> Home |<span class="sr-only">(current)</span></a>
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
              <!-----------migajas de pan---------->
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
              </ol>
            </nav>
        </header>
        <!----------carousel------------>
     <div id="carouselExampleInterval" class="cambio-bottom-carousel carousel slide" data-ride="carousel">
         <ol class="cambio-carousel-indicator carousel-indicators" >
            <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
            <li data-target="#carouselExampleInterval" data-slide-to="2" ></li>
            <li data-target="#carouselExampleInterval" data-slide-to="3"></li>
          </ol>
         <div class="carousel-inner">
          <div class="carousel-item" data-interval="3000">
              <img src="../imagenes/slide7.jpg" class="d-block w-100" alt="..." width="980" height="450">
          </div>
          <div class="carousel-item" data-interval="3000">
              <img src="../imagenes/slide2.jpg" class="d-block w-100" alt="..." width="1280" height="450">
          </div>
          <div class="carousel-item active" data-interval="3000">
              <img src="../imagenes/slide8.jpg" class="d-block w-100" alt="..." width="1680" height="450" style: "background-size: cover">
          </div>
          <div class="carousel-item" data-interval="3000">
              <img src="../imagenes/slide5.jpg" class="d-block w-100" alt="..." width="1280" height="450">
          </div>
        </div>
       </div>

      <!---------cards------------->
      <div class="cambio-card-deck card-deck">
        <div class="cambio-card-sombra card">
          <div class="card-body">
              <h5 class="card-title" align="center">Serevicio Técnico de PC <br> Notebooks </h5>
            <p class="card-text" align="justify">Ofrecemos asistencia remota para resolver inconvenientes
                 de configuración en tu equipo. También disponemos de Service a Domicilio. Si decidís
              acercarnos tu equipo, acercate a nuestra oficina ubicada en el partido de San Fernando.
            </p>
            <p class="card-text"><a href="catalogo.php" class="btn btn-primary">Ver mas..</a></p>
          </div>
        </div>
        <div class="cambio-card-sombra card">
          <div class="card-body">
            <h5 class="card-title" align="center">Reparación de Celulares</h5>
            <br>
            <p class="card-text" align="justify">Cambiamos modulos de todos los modelos. Reemplazo de baterias. Arreglamos pin de carga.</p>
              <br><br>
            <p class="card-text"><a href="catalogo.php" class="btn btn-primary">Ver mas..</a></p>
          </div>
        </div>
        <div class="cambio-card-sombra card">

          <div class="card-body">
              <h5 class="card-title" align="center">Instalaciones de Cámaras de Seguriad</h5>
              <br>
            <p class="card-text" align="justify">Podés incorporar cámaras en tu hogar o comercio y mantener el lugar monitoreado
                                    las 24hs desde tu celular.</p>
            <br><br>
            <p class="card-text"><a href="catalogo.php" class="btn btn-primary">Ver mas..</a></p>
          </div>
        </div>
     </div>
     <!---------plugin de fb-------->
     <div class=" row">
        <div class="col-sm-6">
            <div class="cambio-card-sombra card">
               <div class="cambio-card-sombra card">
                   <div class="card-body">
                       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fzion-pc&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="500" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                   </div>
                </div>
            </div>
         </div>


     <div class="col-sm-6">
        <div class="cambio-card-deck">
           <div class="cambio-card-sombra card">
               <div class="card-body">
                 <h3 class="card-title" align="justify">"La calidad de atención es el valor más importante de nuestra empresa y el reconocimiento positivo de nuestros clientes es altamente satisfactorio para nosotros" </h3>
               </div>
            </div>
        </div>
     </div>
     </div>
     <!------------slider infinito-------->
     <div class="contenedor-slider-infinito">
       <div id="slider-infinito">
       </div>
     </div>
     <!--fin slider-->

     <!--plugin de speed test-->
     <div style="text-align:right;margin-top: 20px;"><div style="min-height:360px;">
     <div style="width:100%;height:0;padding-bottom:50%;position:relative;">
     <iframe style="border:none;position:absolute;top:0;left:0;width:80%;height:80%;min-height:360px;border:none;overflow:hidden !important;margin-left:12%" src="//www.metercustom.net/plugin/">
     </iframe></div></div><a href="https://www.meter.net"></a></div>

     <!----------footer---------->
     <div class="cambio-card-deck footer">
        <div class="card-header form-inline footer">


            <div class="col-md-4 ">
              <div class="">
                  <p class=" text-muted">Envíanos un WhatsApp!</p>
                  <a href="https://api.whatsapp.com/send?phone=541134159411"></a>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="">
                <p class="text-muted">Seguinos en las redes!</p>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="text-muted">
                <p>Pedir Presupuesto</p>
              </div>
            </div>

          </div>
        </div>

     <a href="#" class="cambio-btn-footer btn btn-primary"> Volver </a>
     <!--prueba footer-->


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>
</html>
