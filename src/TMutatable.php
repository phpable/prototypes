<?php
namespace Able\Prototypes;

use \Able\Helpers\Src;
use \Able\Helpers\Str;

trait TMutatable {

	/**
	 * Checks if mutator exists and returns the mutated value.
	 *
	 * @param string $prefix
	 * Any prefix like 'get' or 'set' to separate getters and setters for example.
	 *
	 * @param string $name
	 * It will be camelcased considering an underscore like a separator.
	 *
	 * @param $value
	 * Some parameter if needed.
	 *
	 * @return mixed
	 * The value will be returned "as is" if the requested mutator doesn't exist.
	 */
	protected final function mutate(string $prefix, string $name, mixed $value = null): mixed {
		return method_exists($this, $method = Src::tcm(strtolower(Str::join('_', $prefix, $name , 'property'))))
			? call_user_func([$this, $method], $value) : $value;
	}
}
