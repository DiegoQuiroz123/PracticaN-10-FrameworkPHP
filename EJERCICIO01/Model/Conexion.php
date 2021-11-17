<?php
class Conexion{
	private $con;
	public function _construct(){
		$this->con=new mysql('localhost','root','','veterinaria');
	}
	
	public function getUsers(){
		$query=$this->con->query('SELECT* FROM id');
		$retorno=[];

		$i=0;
		while($fila=$query->fetch_assoc()){
			$retorno[$i]=$fila;
			$i++;
		}
		return $retorno;
	}
	
}
?>