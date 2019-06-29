<?php 

	class Produto{
		private $idproduto;
		private $nome;
		private $quantidade;
		private $categoria;
		private $valor;

		

		public function getIdProduto(){
			return $this->idCliente;
		}

		public function setIdProduto($i){
			$this->idCliente = $i;
			
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($c){
			if(is_string($c)){ 
			$this->nome = $c;
			}
		}

		public function getQuantidade(){
			return $this->quantidade;
		}

		public function setQuantidade($q){
			$this->quantidade = $q;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function setCategoria($c){
			if(is_string($c)){ 
			$this->categoria = $c;
			}
		}

		public function getValor(){
			return $this->valor;
		}

		public function setValor($c){
			 
			$this->valor = $c;
			
		}

		
	}


 ?>