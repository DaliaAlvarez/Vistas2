<?php 

require_once("conexion.php");
class Cliente extends Conexion{

	public function alta($IDcliente,$nombre, $direccion, $telefono, $correo, $apematerno, $apepaterno, $sexo, $fenacimiento){
		$this->sentencia ="INSERT INTO cliente VALUES (null,'$IDascliente','$nombre','$direccion','$telefono','$correo', '$apematerno', '$apepaterno', '$sexo', '$fenacimiento')";
		$thihs->ejecutarSentencia();
	}

	public function eliminar($id){
		$this->sentencia = "DELETE FROM cliente WHERE IDcliente=$id";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM cliente";
		return $this->obtenerSentencia();
	}

	public function modificar($IDcliente,$nombre, $direccion, $telefono, $correo, $apematerno, $apepaterno, $sexo, $fenacimiento){
		$this->sentencia="UPDATE FROM cliente SET IDcliente='$IDcliente', nombre='$nombre', direccion='$direccion', telefono='$telefono' WHERE IDcliente='id'";
		$this->ejecutarSentencia();

	}

}

 ?>