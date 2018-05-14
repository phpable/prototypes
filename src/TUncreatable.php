<?php
namespace Able\Prototypes;

trait TUncreatable {

	/**
	 * @throws \Exception
	 */
	public final function __construct(){
		throw new \Exception('Can\'t create an uncreatable object!');
	}

}
