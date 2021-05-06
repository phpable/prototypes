<?php
namespace Able\Prototypes;

interface ISettable {

	/**
	 * @param string $name
	 * @param $value
	 * @return void
	 */
	public function __set(string $name, $value): void;

	/**
	 * @param string $name
	 * @return void
	 */
	public function __unset(string $name): void;

}

