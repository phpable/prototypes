<?php
namespace Able\Prototypes;

trait THierarchical {

	/**
	 * Retrieves hierarchical list of the class ancestors.
	 *
	 * @attention The called class name is included.
	 * @return array
	 */
	protected final static function hierarchy(){
		$Hierarchy = [get_called_class()];

		while(class_exists($class = get_parent_class($Hierarchy[count($Hierarchy) -1]))){
			array_push($Hierarchy, $class);
		}

		return $Hierarchy;
	}
}
