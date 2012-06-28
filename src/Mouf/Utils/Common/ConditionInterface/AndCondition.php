<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\ConditionInterface;

/**
 * An AndCondition is a condition that is matched if all conditions that make the condition are matched too.
 *
 * @Component
 */
class AndCondition implements ConditionInterface {
	
	/**
	 * The conditions that must be matched.
	 * All conditions must be matched for the AndCondition to match.
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
			if (!$condition->isOk($caller)) {
				return false;
			}
		}
		return true;
	}
}
?>