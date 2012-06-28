<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\ConditionInterface;

/**
 * An OrCondition is a condition that is matched if at least one condition that make the Or condition is matched.
 *
 * @Component
 */
class OrCondition implements ConditionInterface {
	
	/**
	 * The conditions that must be matched.
	 * At least one condition must be matched for the OrCondition to match.
	 *
	 * @Property
	 * @Compulsory
	 * @var array<ConditionInterface>
	 */
	public $conditions;
	
	/**
	 * Returns true if the condition is met, false otherwise.
	 *
	 * @param mixed $caller The condition caller. Optional.
	 * @return bool
	 */
	public function isOk($caller = null) {
		foreach ($this->conditions as $condition) {
			if ($condition->isOk($caller)) {
				return true;
			}
		}
		return false;
	}
}
?>