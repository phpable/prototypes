<?php
namespace Able\Prototypes;

interface IJsonable {

	/**
	 * @return string
	 */
	public function toJson(): string;
}
