<?php
namespace Eggbe\Prototype;

use \Eggbe\Helper\Arr;
use \Eggbe\Prototype\THierarchical;

trait TRetrospective {
	use THierarchical;

	/**
	 * Returns a static property value as an array
	 * extended by a similar values provided by parent classes.
	 *
	 * @param string $name
	 * @return array
	 */
	protected final static function retrospect(string $name){
		return Arr::simplify(array_map(function($class) use ($name){
			return property_exists($class, $name) ? $class::${$name} : [];
		}, static::hierarchy()));
	}
}
