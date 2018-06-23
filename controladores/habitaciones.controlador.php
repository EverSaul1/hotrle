<?php
	
	class ControladorHabitaciones {

		static public function ctrMostrarHabitaciones($item, $valor){
			$tabla = "habitaciones";

			$respuesta = ModeloHabitaciones::mdlMostrarHabitaciones($tabla, $item, $valor);

			return $respuesta;

		}
	}