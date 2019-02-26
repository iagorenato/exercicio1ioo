<?php

    include_once("animal.php");

	class Mamifero extends Animal{
		public $velocidade_maxima;
		
		
		public function __construct($nome,$peso,$comprimento,$altura,$cor_predominante,$velocidade_maxima){
			
			parent::__construct($nome,$peso,$comprimento,$altura,$cor_predominante);
			$this->velocidade_maxima = $velocidade_maxima;
			
		}
		
		public function exibe_dados_mamifero(){
			
			echo "<h3>Mamifero</h3><br />";
			$this->exibe_dados_animal();
			echo "<b>Velocidade Máxima:</b>$this->velocidade_maxima<br />";
		}
		
		
		
	}


?>