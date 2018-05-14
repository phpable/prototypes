<?php
namespace Able\Prototypes;

interface ICallable {

	/**
	 * @param string $name
	 * @param array $Args
	 * @return mixed
	 */
	public function __call(string $name, array $Args);
}

