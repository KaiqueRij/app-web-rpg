<?php

	namespace app\repositorys;

	use mf\repository\Repository;
	use mf\utils\ObjectUtils;

	class RacaRepository extends Repository {

		public function get_all() {

			$sql = 'SELECT * FROM racas';

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			$racas = ObjectUtils::arrayofarray_to_arrayofobject($resultado, 'Raca');

			return $racas;
		}

		public static function get_instance() {
			return new RacaRepository;
		}

	}

?>