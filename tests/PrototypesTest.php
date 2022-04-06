<?php
namespace Able\Prototypes\Tests;

use \PHPUnit\Framework\TestCase;
use \Able\Prototypes\Tests\Examples\Mutatable;

class PrototypesTest extends TestCase {

	public final function testMutatable() {
		$Mutattable = new Mutatable();
		$Mutattable->setValue('test123');

		$this->assertEquals('mutated:test123', $Mutattable->getValue());
	}
}
