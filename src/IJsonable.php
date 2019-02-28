<?php
namespace Able\Prototypes;

interface IJsonable {

	/**
	 * @return static
	 */
	public function toJson(): string;
}
