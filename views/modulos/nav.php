<?php

/*=============================================
=            Ruta del proyecto          =
=============================================*/

$url = Ruta::ctrRuta();

?>

<nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #ffffff;" id="barraNav">

      <div class="container">

        <a class="navbar-brand" href="<?php echo $url?>">
          <img src="<?php echo $url?>views/img/logoweb.png" height="35" class="d-inline-block align-top">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
        
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <div class="navbar-nav ml-auto">

                <li class="nav-item">
                  
                  <a class="nav-link" data-scroll href="<?php echo $url?>#administracion">Administración</a>
                
                </li>

                <li class="nav-item">
                  
                  <a class="nav-link" data-scroll href="<?php echo $url?>#nosotros">Nosotros</a>
                
                </li>

                <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {

                    echo '<li class="nav-item dropdown">
                  
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              '.$value["categoria"].'
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';

                              $item = "id_categoria";
                              $valor = $value["id"];

                              $subcategorias = ControladorCategorias::ctrMostrarSubCategorias($item, $valor);

                              foreach ($subcategorias as $key => $value){

                                  echo '<a class="dropdown-item" href="'.$value["ruta"].'">'.$value["subcategoria"].'</a>';

                              }

                              echo '

                            </div>
                          
                          </li>';

                  }

                ?>

                <li class="nav-item dropdown">
                  
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ceiba Concierge
                  </a>
                  
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Transportación</a>
                    <a class="dropdown-item" href="#">Tours</a>
                    <a class="dropdown-item" href="#">Restaurantes</a>
                    <a class="dropdown-item" href="#">Servicio de chefs</a>
                    <a class="dropdown-item" href="#">Limpieza</a>
                  </div>
                
                </li>

          </div>

        </div>

      </div>

</nav>