<?php
namespace Eggbe\Prototype;

interface IGettable {

	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get(string $name);

	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __isset(string $name);
}

