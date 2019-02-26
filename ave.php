<?php

    include_once("animal.php");

	class Ave extends Animal{
		public $altura_maxima;
		
		
		public function __construct($nome,$peso,$comprimento,$altura,$cor_predominante,$altura_maxima){
			
			parent::__construct($nome,$peso,$comprimento,$altura,$cor_predominante);
			$this->altura_maxima = $altura_maxima;
			
		}
		
		public function exibe_dados_ave(){
			
			echo "<h3>Ave</h3><br />";
			$this->exibe_dados_animal();
			echo "<b>Altura Máxima:</b>$this->altura_maxima<br />";
		}
		
		
		
	}


?>