<?php

	namespace app\services;

	use app\repositorys\ClasseRepository;

	class ClasseService {

		public static function get_all() {
			return ClasseRepository::get_instance()->get_all();
		}

	}

?>