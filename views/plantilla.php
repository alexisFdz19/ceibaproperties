<?php

/*=============================================
=            Ruta del proyecto          =
=============================================*/

$url = Ruta::ctrRuta();

?>


<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url?>views/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $url?>views/css/style.css">

    <title>Ceiba Properties</title>

    <link rel="shortcut icon" href="<?php echo $url?>views/img/logo.png"/>

  </head>

  <body>
      
    <?php

    /*=============================================
    =            NAV          =
    =============================================*/

      include "modulos/nav.php";

        /*==============================================
        =             Contenido dinamico                =
        ==============================================*/

        $rutas = array();
        $ruta = null;
        $infoPropiedad = null;

        if(isset($_GET["ruta"])){

          $rutas = explode("/", $_GET["ruta"]);

          $item = "ruta";
          $valor = $rutas[0];

            /*==============================================
            =       URL´s Amigables   de categorias        =
            ==============================================*/

            $rutaCategorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

            if($rutas[0] == $rutaCategorias["ruta"]){

              $ruta = $rutas[0];

            }

            /*==============================================
            =    URL´s Amigables   de subcategorias        =
            ==============================================*/

            $rutaSubCategorias = ControladorCategorias::ctrMostrarSubCategorias($item, $valor);

            foreach ($rutaSubCategorias as $key => $value) {
                
                if($rutas[0] == $value["ruta"]){

                    $ruta = $rutas[0];

                }

            }

            /*==============================================
            =    URL´s Amigables de propiedades       =
            ==============================================*/

            $rutaPropiedades = ControladorCategorias::ctrMostrarInfoPropiedad($item, $valor);
            
            if($rutas[0] == $rutaPropiedades["ruta"]){

              $infoPropiedad = $rutas[0];

            }
            
            /*==============================================
            =      Lista blanca de  URL´s Amigables       =
            ==============================================*/

            if($ruta != null){

              include "modulos/propiedades.php";

            }elseif($infoPropiedad != null){

              include "modulos/infopropiedad.php";

            }else{

              include "modulos/error.php";

            }

        }else{

          include "modulos/slideeindex.php";

        }

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo $url?>views/js/jquery-3.3.1.min.js"></script>

    <script src="<?php echo $url?>views/js/popper.min.js"></script>

    <script type="text/javascript" src="<?php echo $url?>views/js/bootstrap.min.js"></script>
    
    <script src="<?php echo $url?>views/js/smooth-scroll.min.js"></script>

    <script src="<?php echo $url?>views/js/plantilla.js"></script>

    <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 600, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset:100, // 60 Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
    </script>

  </body>

</html>