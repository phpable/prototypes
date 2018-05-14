<?php
namespace Able\Prototypes;

trait TCallable {

	/**
	 * @param string $name
	 * @param array $Args
	 * @return mixed
	 */
	abstract public function call(string $name, array $Args = []);

	/**
	 * @param string $name
	 * @param array $Args
	 * @return mixed
	 */
	public final function __call(string $name, array $Args = []) {
		return $this->call($name, $Args);
	}

}
