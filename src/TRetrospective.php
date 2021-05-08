<?php
namespace Able\Prototypes;

use \Able\Helpers\Arr;
use \Able\Prototypes\THierarchical;

trait TRetrospective {
	use THierarchical;

	/**
	 * Returns a static property value as an array
	 * extended by a similar values provided by parent classes.
	 *
	 * @param string $name
	 * @return array
	 */
	protected final static function retrospect(string $name): array {
		return call_user_func_array('array_merge', array_map(function($class) use ($name){
			return property_exists($class, $name) ? $class::${$name} : [];

		}, array_reverse(static::hierarchy())));
	}
}
