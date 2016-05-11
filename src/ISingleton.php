<?php
namespace Eggbe\Prototype;

interface ISingleton {

	/**
	 * This is just the alternative name for the traditional getInstance method.
	 * We had serious reason to rename it because the traditional name is too long.
	 *
	 * @return ISingleton
	 */
	public static function make() : ISingleton;

}
