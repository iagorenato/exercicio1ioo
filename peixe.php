<?php

    include_once("animal.php");

	class Peixe extends Animal{
		public $temp_media_sobrev;
		
		
		public function __construct($nome,$peso,$comprimento,$altura,$cor_predominante,$temp_media_sobrev){
			
			parent::__construct($nome,$peso,$comprimento,$altura,$cor_predominante);
			$this->temp_media_sobrev = $temp_media_sobrev;
			
		}
		
		public function exibe_dados_peixe(){
			
			echo "<h3>Peixe</h3><br />";
			$this->exibe_dados_animal();
			echo "<b>Temperatura Média em que Sobrevive:</b>$this->temp_media_sobrev<br />";
		}
		
		
		
	}


?>