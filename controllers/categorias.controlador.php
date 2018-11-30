<?php

class ControladorCategorias{

	/*=============================================
	=            Categorias          =
	=============================================*/

	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	=            Subategorias          =
	=============================================*/

	static public function ctrMostrarSubCategorias($item, $valor){
		
		$tabla = "subcategorias";

		$respuesta = ModeloCategorias::mdlMostrarSubCategorias($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	=            Mostrar propiedades          =
	=============================================*/

	static public function ctrMostrarPropiedades($ordenar, $item, $valor, $base, $tope){
		
		$tabla = "propiedades";

		$respuesta = ModeloCategorias::mdlMostrarPropiedades($tabla, $ordenar, $item, $valor, $base, $tope);

		return $respuesta;

	}

	/*=============================================
	=            Mostrar info propiedad          =
	=============================================*/

	static public function ctrMostrarInfoPropiedad($item, $valor){
		
		$tabla = "propiedades";

		$respuesta = ModeloCategorias::mdlMostrarInfoPropiedad($tabla, $item, $valor);

		return $respuesta;

	}


}