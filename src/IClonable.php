<?php
namespace Able\Prototypes;

interface IClonable {

	/**
	 * @return mixed
	 */
	public function __clone(): mixed;
}
