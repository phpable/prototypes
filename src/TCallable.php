<?php
namespace Able\Prototypes;

use \Exception;

trait TCallable {

	/**
	 * @param string $name
	 * @param array $Args
	 * @return mixed
	 *
	 * @throws Exception
	 */
	abstract public function call(string $name, array $Args = []): mixed;

	/**
	 * @param string $name
	 * @param array $Args
	 * @return mixed
	 *
	 * @throws Exception
	 */
	public final function __call(string $name, array $Args = []): mixed {
		return $this->call($name, $Args);
	}
}
