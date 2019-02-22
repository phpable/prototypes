<?php
namespace Able\Prototypes;

trait TUnclonable {

	/**
	 * @throws \Exception
	 */
	public final function __clone(){
		throw new \Exception(sprintf('Can not clone an unclonable object of the class: %s!', static::class));
	}

}
