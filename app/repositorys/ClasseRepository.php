<?php

	namespace app\repositorys;

	use mf\repository\Repository;
	use mf\utils\ObjectUtils;

	class ClasseRepository extends Repository {

		public function get_all() {
			
			$sql = 'SELECT * FROM classes';

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			$classes = ObjectUtils::arrayofarray_to_arrayofobject($resultado, 'Classe');

			return $classes;
		}

		public static function get_instance() {
			return new ClasseRepository;
		}

	}

?>