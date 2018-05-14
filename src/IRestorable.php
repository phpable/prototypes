<?php
namespace Able\Prototypes;

interface IRestorable {

	/**
	 * Restore an object from a given representation.
	 *
	 * @param array $Values
	 */
	public function __construct(array $Values);

}
