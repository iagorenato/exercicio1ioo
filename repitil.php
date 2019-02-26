<?php

    include_once("animal.php");

	class Repitil extends Animal{
		public $submerso_max_tempo_agua;
		
		
		public function __construct($nome,$peso,$comprimento,$altura,$cor_predominante,$submerso_max_tempo_agua){
			
			parent::__construct($nome,$peso,$comprimento,$altura,$cor_predominante);
			$this->submerso_max_tempo_agua = $submerso_max_tempo_agua;
			
		}
		
		public function exibe_dados_repitil(){
			
			echo "<h3>Repitil</h3><br />";
			$this->exibe_dados_animal();
			echo "<b>Tempo Maximo Submerso na Agua:</b>$this->submerso_max_tempo_agua<br />";
		}
		
		
		
	}


?>