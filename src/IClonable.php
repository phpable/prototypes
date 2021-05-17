<?php
namespace Able\Prototypes;

interface IClonable {

	/**
	 * @return void
	 */
	public function __clone(): void;
}
