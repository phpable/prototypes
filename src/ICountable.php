<?php
namespace Eggbe\Prototype;

interface ICountable extends \Countable {

	/**
	 * @return int
	 */
	public function count():int;
}
