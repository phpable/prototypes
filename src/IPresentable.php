<?php
namespace Able\Prototypes;

interface IPresentable {

	/**
	 * Returns an item representation.
	 * @return array
	 */
	public function present(): array;
}
