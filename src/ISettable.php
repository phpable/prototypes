<?php
namespace Eggbe\Prototype;

interface ISettable {

	/**
	 * @param string $name
	 * @param $value
	 * @return void
	 */
	public function __get(string $name, $value);

	/**
	 * @param string $name
	 * @return mixed
	 * @return void
	 */
	public function __unset(string $name);

}

