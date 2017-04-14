<?php
namespace Eggbe\Prototype;

interface IFillable {

	/**
	 * Fill object values via array.
	 * @param array $Values
	 */
	public function fill(array $Values);
}
