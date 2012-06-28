<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\ConditionInterface;

/**
 * A NotCondition is a condition that is matched if the condition it contains is NOT matched.
 *
 * @Component
 */
class NotCondition implements ConditionInterface {
	
	/**
	 * The conditions that must NOT be matched.
	 *
	 * @Property
	 * @Compulsory
	 * @var ConditionInterface
	 */
	public $condition;
	
	/**
	 * Returns true if the condition is NOT met, false otherwise.
	 *
	 * @param mixed $caller The condition caller. Optional.
	 * @return bool
	 */
	public function isOk($caller = null) {
		return !$this->condition->isOk($caller);
	}
}
?>