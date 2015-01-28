<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\ConditionInterface;

/**
 * An BoolToCondition is a condition that can be set dynamically.
 */
class BoolToCondition implements ConditionInterface {
	
	/**
	 * The condition to set.
	 *
	 * @Property
	 * @Compulsory
	 * @var bool
	 */
	private $result;

	/**
	 * @param bool $result
	 */
	public function __construct($result = false) {
		$this->result = $result;
	}

	/**
	 * Set the condition.
	 *
	 * @param bool $result
	 */
	public function setResult($result) {
		$this->result = $result;
	}
	
	/**
	 * Returns true if the condition is met, false otherwise.
	 *
	 * @param mixed $caller The condition caller. Optional.
	 * @return bool
	 */
	public function isOk($caller = null) {
		return $this->result;
	}
}
?>