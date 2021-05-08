<?php
namespace Able\Prototypes;

use \Exception;

trait TFillable {

	/**
	 * Fills object values via an array.
	 *
	 * @param array $Values
	 * @return void
	 *
	 * @throws Exception
	 */
	public function fill(array $Values): void {
		foreach ($Values as $name => $value){
			if (!property_exists($this, $name)){
				throw new Exception('Undefined property "' . $name . '"!');
			}

			$this->{$name} = $value;
		}
	}
}
