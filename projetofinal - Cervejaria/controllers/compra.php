<?php 


	class compra{

		private $idCompra;
		private $cliente_Idcliente;
		private $produto_idproduto;
		private $valorTotal;


		

		public function getidCompra(){
			return $this->idCompra;
		}

		public function setidCompra($i){
			 
			$this->idCompra = $i;
		}


		public function getcliente_Idcliente(){
			return $this->cliente_Idcliente;
		}

		public function setcliente_Idcliente($i){
			$this->cliente_Idcliente = $i;
			
		}

		public function getproduto_Idproduto(){
			return $this->produto_idproduto;
		}

		public function setproduto_Idproduto($i){
			$this->produto_idproduto = $i;
			
		}

		public function getValorTotal(){
			return $this->valorTotal;
		}

		public function setValorTotal($n){
			 $this->valorTotal = $n;
			
		}



	}

 ?>