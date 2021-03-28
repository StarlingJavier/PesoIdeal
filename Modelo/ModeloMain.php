<?php   

class PesoIdealModel{
	
	private $altura;
	private $edad;
	private $total;
	
	public function __construct(){
		
		$this->altura = 0;
		$this->edad = 0;
		$this->total = 0;
	}
	
	public function set_Altura($altura){
		$this->altura=$altura;
	}
	public function set_Edad($edad){
		$this->edad=$edad;
	}
	
	public function get_Altura(){
		return $this-> altura;
	}
	public function get_Edad(){
		return $this->edad;
	}
	public function get_Total(){
		$this->total= $this->altura-100+(($this->edad/10)*0.9);
		
		return $this->total;
	}
	
	function __destruct() {
		
		$this->altura = 0;
		$this->peso = 0;
		$this->total = 0;
    
	}
}




?>