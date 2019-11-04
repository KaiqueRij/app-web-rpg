<?php

	namespace app;

	use mf\init\Bootstrap;

	/**
	 * Classe que define o sistema de roteamento das url
	 */
	class Route extends Bootstrap {

		protected function init_routes() {

			// Rotas para o controlador da index
			$routes['index'] = array (
				'route' => '/',
				'controller' => 'IndexController',
				'action' => 'index'
			);

			$routes['entrar'] = array (
				'route' => '/entrar',
				'controller' => 'IndexController',
				'action' => 'entrar'
			);

			// Rotas para o controlador de autenticação
			$routes['autenticar'] = array (
				'route' => '/autenticar',
				'controller' => 'AuthController',
				'action' => 'autenticar'
			);

			$routes['sair'] = array (
				'route' => '/sair',
				'controller' => 'AuthController',
				'action' => 'sair'
			);

			// Rotas para o controlador da ficha
			$routes['fichas'] = array (
				'route' => '/fichas',
				'controller' => 'FichaController',
				'action' => 'get_all_by_usuario'
			);

			$routes['criar_ficha'] = array (
				'route' => '/criar_ficha',
				'controller' => 'FichaController',
				'action' => 'criar_ficha'
			);

			$this->set_routes($routes);
		}

	}

?>