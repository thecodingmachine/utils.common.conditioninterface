<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\ConditionInterface;

/**
 * A trait that adds a setter on a condition.
 *
 */
trait ConditionTrait {
	/**
	 * @var ConditionInterface|null
	 */
	protected $condition;
	
	/**
	 * Sets the condition.
	 * 
	 * @Important IfSet
	 * @param ConditionInterface $condition
	 */
	public function setCondition(ConditionInterface $condition = null) {
		$this->condition = $condition;
	}
}
?>
