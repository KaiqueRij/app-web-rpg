<?php

	namespace mf\repository;

	use app\Connection;

	/**
	 * Classe que abstrai os principais componentes do framework relacionado a conectar e solicitar recursos a base de dados
	 */
	abstract class Repository {

		protected static $instance;
		protected $conn;

		public function __construct() {
			$this->conn = Connection::get_connection();
		}

	}

?>