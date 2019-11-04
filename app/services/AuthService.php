<?php

	namespace app\services;

	use app\repositorys\AuthRepository;

	class AuthService {

		public static function autenticar($usuario) {
			
			if($usuario->__get('email') == '' || $usuario->__get('senha') == '') {
				return $usuario;
			}

			$usuario = AuthRepository::get_instance()->autenticar($usuario);

			return $usuario;
		}

	}

?>