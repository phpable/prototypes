<?php
namespace Able\Prototypes;

interface IGettable {

	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get(string $name);

	/**
	 * @param string $name
	 * @return bool
	 */
	public function __isset(string $name): bool;
}

