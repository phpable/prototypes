<?php
namespace Able\Prototypes;

interface ICountable extends \Countable {

	/**
	 * @return int
	 */
	public function count(): int;
}
