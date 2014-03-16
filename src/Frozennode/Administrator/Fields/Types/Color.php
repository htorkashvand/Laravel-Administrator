<?php namespace Frozennode\Administrator\Fields\Types;

class Color extends Text {

	/**
	 * Abstract method that should return a field's string representation in the config files
	 *
	 * @return string
	 */
	public function getConfigName()
	{
		return 'color';
	}

}