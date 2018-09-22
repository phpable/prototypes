<?php
namespace Able\Prototypes;

use \Able\Prototypes\ISingleton;

trait TSingleton {

	/**
	 * @var array
	 */
	private static $Instances = [];

	/**
	 * @return ISingleton
	 */
	public static function make(): ISingleton {
		if (!array_key_exists(static::class, self::$Instances)){
			self::$Instances[static::class] = new static(...func_get_args());
		}

		return self::$Instances[static::class];
	}

}
