<?php
namespace Able\Prototypes;

interface IFillable {

	/**
	 * Fills object values via an array.
	 *
	 * @param array $Values
	 * @return void
	 */
	public function fill(array $Values): void;
}
