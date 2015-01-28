What is this package?
=====================

This package contains an interface used by test conditions.
Basically, instances of classes implementing this interface can be tested and the instance will return "true" or "false".

The concept is very abstract, but also very powerful. Let's take a sample:
- you might write a "LoggedCondition" class that implements a condition that returns true if the current user is logged, false otherwise.
- you might write a "HasRightCondition" class that implements a condition that returns true if the current user has some set of rights, false otherwise.
- you might write a "TimeCondition" class that implements a condition that returns true only at some time of the day.
- ...

Obviously, this package is useless on its own. It is useful only if you implement the interface in your classes.

But what is it useful for?
--------------------------

It gets very useful if some components of your code are just expecting a condition. For instance, let's assume you are
developing a menu system. A particular menu item should only be displayed when a user is logged.

If a menu item is represented by an instance of the MenuItem class, there are several way you can tackle this problem.
Using OO design, you could extend the MenuItem class to add special behaviour regarding the "must be logged" requirement. 
But using the ConditionInterface, it gets more powerful. If each MenuItem contains a ConditionInterface, you only need
to add a "LoggedCondition" instance to your menu item, and you are done!
It gets really interesting when you are using a dependency injection framework like Mouf.

In practice
-----------

Implementing the condition interface is simple stupid: just add a "isOk" method to your code:

	/**
	 * Returns true if the condition is met, false otherwise.
	 *
	 * @param mixed $caller The condition caller. Optional.
	 * @return bool
	 */
	function isOk($caller = null);

Provided classes
----------------

This package comes with a few utility classes:

- `TrueCondition`: always returns true
- `FalseCondition`: always returns false
- `AndCondition`: performs a logical AND between child conditions
- `OrCondition`: performs a logical OR between child conditions
- `NotCondition`: performs a logical NOT on a condition
- `BoolToCondition`: wraps boolean into condition interface (useful to set it dynamically)


Mouf package
------------

This package is part of Mouf (http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
