<?php 
	require ("conexion.php");

	class DevuelveProductos extends Conexion{

		public function DevuelveProductos(){

			//llama al constructor de la clase padre(conexion)(conecta)
			parent::__construct();

		}

		public function get_productos($dato){
			

			$sql="SELECT * FROM PRODUCTOS WHERE NOMBRE= '" . $dato . "'";

			$sentencia=$this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

			$sentencia->closeCursor();
			return $resultado;

			$this->conexion_db=null;

			
		}

	}


 ?>