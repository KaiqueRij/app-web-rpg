<?php

	namespace app\services;

	use app\repositorys\RacaRepository;

	class RacaService {

		public static function get_all() {
			return RacaRepository::get_instance()->get_all();
		}

	}

?>