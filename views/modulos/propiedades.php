<?php

$url = Ruta::ctrRuta();

?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">

      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $url?>views/img/cover2.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Propiedades</h1>
            <p>Encuentra tu lugar perfecto para estar, elige tu mejor opción y contáctanos</p>
          </div>
        </div>

      <div>

</div>

<br>


<!--=============================================
=           Listar Propiedades          =
=============================================-->


<div class="container">

	<!--=============================================
	=           Breadcrumb          =
	=============================================-->

	<nav aria-label="breadcrumb">

			<ol class="breadcrumb">

				<li class="breadcrumb-item"><a href="<?php echo $url; ?>">INICIO</a></li>
				<li class="breadcrumb-item active pagActiva text-uppercase" aria-current="page"><?php echo $rutas[0]; ?></li>

			</ol>
			
	</nav>
	
	<div class="row" id="rowelementos">

		<?php

		$ordenar = "id";
		$item1 = "ruta";
		$valor1 = $rutas[0];

		$categoria = ControladorCategorias::ctrMostrarCategorias($item1, $valor1);

		if(!$categoria){

			$subCategoria = ControladorCategorias::ctrMostrarSubCategorias($item1, $valor1);

			$item2 = "id_subcategoria";
			$valor2 = $subCategoria[0]["id"];

		}else{

			$item2 = "id_categoria";
			$valor2 = $categoria["id"];

		}

		$base = 0;
		$tope = 12;

		$propiedades = ControladorCategorias::ctrMostrarPropiedades($ordenar, $item2, $valor2, $base, $tope);

		if(!$propiedades){

			echo '<div class="col-sm-12">

					<h1>Aún no tenemos propiedades publicadas en esta sección</h1>

				</div>';

		}else{

			foreach ($propiedades as $key => $value) {
				
				echo '
				
				<div class="card" style="width: 15rem;" id="cardelementos">

					<img class="card-img-top" src="'.$url.$value["portada"].'" alt="Card image cap">

					<div class="card-body">
						<h5 class="card-title">'.$value["titulo"].'</h5>
						<p class="card-text">'.$value["descripcion"].'</p>
						<a href="#" class="btn btn-dark">Ver más</a>
					</div>

				</div>
		
			';
			
			}


		}

		?>

	</div>

</div>
<br>