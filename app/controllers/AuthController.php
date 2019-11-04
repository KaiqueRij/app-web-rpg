<?php

	namespace app\controllers;

	use mf\controller\Action;

	use app\services\AuthService;
	use app\models\Usuario;

	/**
	 * Classe que define o controlador da autenticação
	 */
	class AuthController extends Action {

		public function autenticar() {

			$email = isset($_POST['email']) ? $_POST['email'] : '';
			$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
			$usuario = new Usuario(null, $email, $senha);

			$usuario = AuthService::autenticar($usuario);

			// Erro 002: Usuário não cadastrado
			if(is_null($usuario->__get('id'))) {
				header('Location: /entrar?erro=002');
			}

			session_start();

			$_SESSION['id'] = $usuario->__get('id');
			$_SESSION['nome'] = $usuario->__get('nome');

			header('Location: /fichas');
		}

		public function sair() {
			session_start();
			session_destroy();
			header('Location: /');
		}

	}

?>