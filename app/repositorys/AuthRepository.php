<?php

	namespace app\repositorys;

	use mf\repository\Repository;

	class AuthRepository extends Repository {

		public function autenticar($usuario) {
			
			$sql = 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha';
			$stmt = $this->conn->prepare($sql);

			$stmt->bindValue(':email', $usuario->__get('email'));
			$stmt->bindValue(':senha', $usuario->__get('senha'));
			$stmt->execute();

			$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			foreach ($resultado as $key => $value) {
				$usuario->__set($key, $value);
			}

			return $usuario;
		}

		// Singleton
		public static function get_instance() {
			if (!isset(self::$instance)) {
				self::$instance = new AuthRepository();
			}
			return self::$instance;
		}

	}

?>