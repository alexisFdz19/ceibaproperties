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

}