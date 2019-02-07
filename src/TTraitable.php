<?php
namespace Able\Prototypes;

use \Able\Helpers\Src;
use \Able\Helpers\Arr;

use \Generator;

trait TTraitable {

	/**
	 * @param string $prefix
	 * @param mixed ...$args
 	 * @return Generator
	 */
	protected final function propagate(string $prefix, ...$args): Generator {
		foreach (array_filter(Arr::make(Src::traits($this), function($_) use ($prefix ) {
			return sprintf('%s%s', $prefix, Src::unpref($_));
		}), function($_){
			return method_exists($this, $_);
		}) as $name => $method) {
			yield $name => $this->{$method}(...$args);
		}
	}
}
