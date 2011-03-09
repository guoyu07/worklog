<?php

class WebUser extends CWebUser
{
	public function setEntry($value)
	{
		$this->setState('entry', $value);
	}
	
	public function getEntry()
	{
		return $this->getState('entry');
	}

	public function flushEntry()
	{
		$this->setEntry(null);
	}
}
