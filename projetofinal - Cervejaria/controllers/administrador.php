<?php 

	class administrador{

		private $idAdministrador;
		private $nome; 
		private $endereco;
		private $cpf;
		private $telefone;
		private $email;
		private $senha;
		

		public function getIdAdministrador(){
			return $this->idAdministrador;
		}

		public function setIdAdministrador($c){
			$this->idAdministrador = $c;
			
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($n){
			if(is_string($n)){ 
			$this->nome = $n;
			}
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function setEndereco($e){
			if(is_string($e)){ 
			$this->endereco = $e;
			}
		}


		public function getCpf(){
			return $this->cpf;
		}

		public function setCpf($c){
			if(is_string($c)){ 
			$this->cpf = $c;
			}
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function setTelefone($t){
			if(is_string($t)){
			$this->telefone = $t;
			}
		}


		public function getEmail(){
			return $this->email;
		}

		public function setEmail($e){
			if(is_string($e)){ 
			$this->email = $e;
			}
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($s){
			if(is_string($s)){ 
			$this->senha = $s;
			}
		}

	}

 ?>