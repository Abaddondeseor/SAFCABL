<?php
class Usuario{
	public $nombre;
	public $estado;

	public function _construct(){
		$this->estado = 0;
	}
	
}


class Administrador extends Usuario	{


}


?>