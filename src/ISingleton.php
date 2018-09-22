<?php
namespace Able\Prototypes;

interface ISingleton {

	/**
	 * It's just an alternative name of the traditional 'getInstance' method.
	 * We had the really serious reason to rename it: the traditional name is too long.
	 *
	 * @return ISingleton
	 */
	public static function make(): ISingleton;

}
