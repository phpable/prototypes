<?php
namespace Able\Prototypes\Tests\Examples;

use \Able\Prototypes\TMutatable;

class Mutatable {
	use TMutatable;

	private string $value = 'initial';

	public final function setValue(string $value): void {
		$this->value = $value;
	}

	public final function getValue(): string {
		return self::mutate('get', 'value', $this->value);
	}

	public final function getValueProperty(string $value): string {
		return sprintf("mutated:%s", $value);
	}
}
