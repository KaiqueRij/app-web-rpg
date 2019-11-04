<?php

	namespace app\models;

	class Classe {

		private $id;
		private $nome;

		public function __get($attr) {
			return $this->$attr;
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}

	}
?>