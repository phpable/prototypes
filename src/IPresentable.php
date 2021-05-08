<?php
namespace Able\Prototypes;

interface IPresentable {

	/**
	 * Returns an object represented like an array.
	 * @return array
	 */
	public function present(): array;
}
