<?php
namespace Eggbe\Prototype;

use \Eggbe\Helper\Src;
use \Eggbe\Helper\Str;

trait TMutatable {

	/**
	 * Checks if any mutater exists and returns the mutated value.
	 *
	 * @param string $prefix
	 * Some prefix like 'get' or 'set' for example.
	 *
	 * @param string $name
	 * The value name will be converted into the camel case
	 * by using underscores like a separator.
	 *
	 * @param $default
	 * The value to return  if mutator doesn't exists.
	 *
	 * @return mixed
	 */
	protected function mutate(string $prefix, string $name, $default) {
		return method_exists($this, $method = Src::tocm(strtolower(Str::join('_', $prefix, $name , 'property'))))
			? call_user_func_array([$this, $method], []) : $default;
	}

}
