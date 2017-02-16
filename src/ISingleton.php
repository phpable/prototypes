<?php
namespace Eggbe\Prototype;

interface ISingleton {

	/**
	 * It's just the alternative name for the standard getInstance method.
	 * We had the really serious reason to rename it: the traditional name is too long.
	 *
	 * @return ISingleton
	 */
	public static function make(): ISingleton;

}
