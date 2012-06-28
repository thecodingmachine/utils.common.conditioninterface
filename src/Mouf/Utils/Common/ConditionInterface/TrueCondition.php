<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\ConditionInterface;

/**
 * A TrueCondition is a condition that is always "true".
 *
 * @Component
 */
class TrueCondition implements ConditionInterface {
	
	/**
	 * Returns true, always.
	 *
	 * @param mixed $caller The condition caller. Optional.
	 * @return bool
	 */
	public function isOk($caller = null) {
		return true;
	}
}
?>