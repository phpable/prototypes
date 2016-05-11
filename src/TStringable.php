<?php
namespace Eggbe\Prototype;

trait TStringable {

	/**
	 * @return string
	 */
	abstract public function toString();

	/**
	 * @return string
	 */
	public final function __toString() {
		return $this->toString();
	}

}
