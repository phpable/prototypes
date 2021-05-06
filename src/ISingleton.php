<?php
namespace Able\Prototypes;

interface ISingleton {

	/**
	 * It's just an alternative to the traditional 'getInstance' method.
	 * There are no benefits except that the traditional name is too long.
	 *
	 * @return ISingleton
	 */
	public static function make(): ISingleton;
}
