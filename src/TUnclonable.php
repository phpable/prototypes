<?php
namespace Able\Prototypes;

use \Exception;

trait TUnclonable {

	/**
	 * @throws Exception
	 */
	public final function __clone(){
		throw new Exception(sprintf('Can not clone an unclonable instance of the class: %s!', static::class));
	}
}
