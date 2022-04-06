<?php
namespace Able\Prototypes;

use \Able\Helpers\Src;
use \Able\Helpers\Str;

trait TMutatable {

	/**
	 * Checks if mutator exists and returns the mutated value.
	 */
	protected final function mutate(string $prefix, string $name, mixed $value): mixed {
		return method_exists($this,

			/**
			 * The method name will be camelcased
			 * considering an underscore like a separator.
			 */
			$method = Src::tcm(strtolower(Str::join('_', $prefix, $name,

				/**
				 * The suffix is always static.
				 */
				'property'))))

		? call_user_func([$this, $method], $value)

		/**
		 * The value will be returned "as is"
		 * if the requested mutator doesn't exist.
		 */
		: $value;
	}
}
