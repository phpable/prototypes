<?php
namespace Eggbe\Prototype;

use \Eggbe\Helper\Arr;
use \Eggbe\Helper\Src;
use \Eggbe\Reglib\Reglib;

trait TAggregatable {

	/**
	 * Return an aggregate value of given property.
	 *
	 * @param string $name
	 * @return array
	 */
	protected static function aggregate(string $name) : array {
		return array_merge(Src::call([get_parent_class(static::class), 'aggregate'], $name, []),
			Arr::cast(Arr::get(get_class_vars(static::class), $name)));
	}
}
