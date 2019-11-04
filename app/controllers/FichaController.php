<?php

	namespace app\controllers;

	// Importe do mf
	use mf\controller\Action;

	// Importe da lógica de negócio da ficha
	// use app\services\FichaService;
	use app\services\RacaService;
	use app\services\ClasseService;

	class FichaController extends Action {

		public function get_all_by_usuario() {

			session_start();

			// Erro 001: Usuário não está logado
			if(!isset($_SESSION['id']) && $_SESSION['id'] == ''){
				header('Location: /entrar?erro=001');
			}

			$this->render('fichas','layout');
		}

		public function criar_ficha() {

			// Busca todas as raças
			$this->view->racas = RacaService::get_all();
			
			// Busca todas as classes
			$this->view->classes = ClasseService::get_all();

			$this->render('criar-ficha', 'layout');
		}

	}

?>