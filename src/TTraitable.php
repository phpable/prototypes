<?php
namespace Able\Prototypes;

use \Able\Helpers\Src;

trait TTraitable {

	/**
	 * @param string $prefix
	 */
	protected final function propagate(string $prefix): void {
		foreach(class_uses($this) as $trait){
			if (method_exists($this, $method = $prefix . Src::rns($trait))) {
				$this->{$method}();
			}
		}
	}

}
