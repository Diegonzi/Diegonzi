<?php 

	require ("config.php");

	class Conexion{

		protected $conexion_db;

		//Constructor
		public function Conexion(){

			try{
				//Conexion
				$this->conexion_db=new PDO('mysql:host=localhost; dbname=diegonzi','root','');
				//Tipo de error
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Tipo caracteres
				$this->conexion_db->exec("SET CHARACTER SET utf8");
				//Devuelve conexion
				return $this->conexion_db;


				}catch(exception $e){

				echo "La linea de error es: " . $e->getLine();
			}
}

}

 ?>