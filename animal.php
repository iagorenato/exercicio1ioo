<?php

    class Animal{
	
		public $nome;
		public $peso;
		public $comprimento;
		public $altura;
		public $cor_predominante;
		
		public function __construct($nome,$peso,$comprimento,$altura,$cor_predominante){
			$this->nome = $nome;
			$this->peso = $peso;
			$this->comprimento = $comprimento;
			$this->altura = $altura;
			$this->cor_predominante = $cor_predominante;
		}
		
		public function exibe_dados_animal(){
			echo "<b>Nome:</b>$this->nome<br />
				  <b>Peso:</b>$this->email<br />
				  <b>Comprimento:</b>$this->telefone<br />
				  <b>Altura:</b>$this->idade<br />
				  <b>Cor_predominante:</b>$this->sexo<br />";
		}
		
	}
	
?>