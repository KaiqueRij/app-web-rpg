<?php

	namespace mf\utils;

	class ObjectUtils {

		public static function arrayofarray_to_arrayofobject($list, $class) {
			$class = 'app\\models\\' . $class;
			foreach ($list as $key => $array) {
				$object = new $class;
				foreach ($array as $attr => $value) {
					$object->__set($attr, $value);
				}
				$objects[] = $object;
			}
			return $objects;
		}

	}

?>