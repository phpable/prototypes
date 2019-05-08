<?php
namespace Able\Prototypes;

use \Generator;

interface IIteratable {

	/**
	 * @return Generator
	 */
	public function iterate(): Generator;

}

