<?php

    include_once("animal.php");

	class Anfibio extends Animal{
		public $sub_max_tempo_agua;
		
		
		public function __construct($nome,$peso,$comprimento,$altura,$cor_predominante,$sub_max_tempo_agua){
			
			parent::__construct($nome,$peso,$comprimento,$altura,$cor_predominante);
			$this->sub_max_tempo_agua = $sub_max_tempo_agua;
			
		}
		
		public function exibe_dados_anfibio(){
			
			echo "<h3>Anfibio</h3><br />";
			$this->exibe_dados_animal();
			echo "<b>Tempo Maximo Submerso na Agua:</b>$this->sub_max_tempo_agua<br />";
		}
		
		
		
	}


?>