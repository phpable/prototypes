<?php
namespace Eggbe\Prototype;

use \Eggbe\Helper\Arr;

trait TAggregatable {

	/**
	 * Return an aggregate value of given property.
	 *
	 * @param string $name
	 * @return array
	 */
	protected static function aggregate(string $name) : array {
		return array_merge(is_callable($target = [get_parent_class(static::class), 'aggregate'])
			? call_user_func($target, $name) : [], Arr::cast(Arr::get(get_class_vars(static::class), $name)));
	}
}
