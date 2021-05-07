<?php
namespace Able\Prototypes;

use \Exception;

trait TStringable {

	/**
	 * @return string
	 */
	abstract public function toString() : string;

	/**
	 * @return string
	 * @throws Exception
	 */
	public final function __toString() : string {
		return $this->toString();
	}
}
