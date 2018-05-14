<?php
namespace Able\Prototypes;

trait TFillable {

	/**
	 * Fill object values via array.
	 *
	 * @param array $Values
	 * @throws \Exception
	 */
	public function fill(array $Values) {
		foreach ($Values as $name => $value){
			if (!property_exists($this, $name)){
				throw new \Exception('Undefined property "' . $name . '"!');
			}

			$this->{$name} = $value;
		}
	}

}
