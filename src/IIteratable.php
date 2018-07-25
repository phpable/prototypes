<?php
namespace Able\Prototypes;

interface IIteratable {

	/**
	 * @return \Generator
	 */
	public function iterate(): \Generator;

}

