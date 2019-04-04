<?php
namespace Able\Prototypes;

use \Able\Helpers\Src;

trait TDefault {

	/**
	 * @param string $name
	 * @param mixed $default
	 *
	 * @return mixed|null
	 */
	protected final function default(string $name, $default = null) {
		return defined(
			$_ = sprintf('static::default%sValue', Src::tcm($name)))

				? constant($_) : $default;
	}
}
