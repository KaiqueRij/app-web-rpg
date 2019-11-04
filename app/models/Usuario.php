<?php

	namespace app\models;

	class Usuario {

		private $id;
		private $nome;

		private $email;
		private $senha;

		public function __construct($nome, $email, $senha) {
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}

	}

?>