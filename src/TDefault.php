<?php
namespace Able\Prototypes;

use \Able\Helpers\Src;

trait TDefault {

	/**
	 * @param string $name
	 * @param mixed $default
	 *
	 * @return mixed
	 */
	protected final function default(string $name, mixed $default = null): mixed {
		return defined(
			$_ = sprintf('static::default%sValue', Src::tcm($name)))

				? constant($_) : $default;
	}
}
