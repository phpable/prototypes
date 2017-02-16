<?php
namespace Eggbe\Prototype;

interface IPresentable {

	/**
	 * Returns an item representation.
	 * @return array
	 */
	public function present(): array;
}
