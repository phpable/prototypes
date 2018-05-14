<?php
namespace Able\Prototypes;

trait TStringable {

	/**
	 * @return string
	 */
	abstract public function toString() : string;

	/**
	 * @return string
	 */
	public final function __toString() : string {
		return $this->toString();
	}

}
