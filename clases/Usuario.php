<?php
class Usuario{
	private $name;
		public function getUsuario(){
		echo"<br>Mostrar usuario: ".$this->name;
		} 
		public function setUsuario(){
			$this->name = "RA&acute;1";
			return $this->name;
		}
}
?>
