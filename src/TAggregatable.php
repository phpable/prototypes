<?php
namespace Eggbe\Prototype;

use \Eggbe\Helper\Arr;
use \Eggbe\Reglib\Reglib;

trait TAggregatable {

	/**
	 * Return an aggregate value of given property.
	 *
	 * @param string $name
	 * @return array
	 */
	protected static function aggregate(string $name) : array {
		$Properties = array_map(function($value) {
				if (!preg_match('/' . Reglib::VAR . '/', $value)) {
					throw new \Exception('Invalid or empty structure field name!');
				}

				return strtolower($value);
			}, Arr::cast(Arr::get(get_class_vars(static::class), $name)));


		if (method_exists(get_parent_class(static::class), 'aggregate')) {
			$Properties = array_merge(call_user_func([get_parent_class(static::class),
				'aggregate'], $name), $Properties);
		}

		return $Properties;
	}
}
