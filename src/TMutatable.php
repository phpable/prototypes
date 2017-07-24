<?php
namespace Eggbe\Prototype;

use \Eggbe\Helper\Arr;
use \Eggbe\Helper\Src;
use \Eggbe\Helper\Str;

trait TMutatable {

	/**
	 * Checks if any mutater exists and returns the mutated value.
	 *
	 * @param string $prefix
	 * Any prefix like 'get' or 'set' to separate getters and setters for example.
	 *
	 * @param string $name
	 * It will be converted into the camel case
	 * via underscores like a separator.
	 *
	 * @param $params
	 * Some parameters if needed.
	 *
	 * @return mixed
	 * Params will be returned "as is" if the requested mutator doesn't exists.
	 */
	protected final function mutate(string $prefix, string $name, $params = []) {
		return method_exists($this, $method = Src::tocm(strtolower(Str::join('_', $prefix, $name , 'property'))))
			? call_user_func_array([$this, $method], Arr::cast($params)) : $params;
	}
}
