<?php namespace Checkpoint1A\src;

use Checkpoint1A\src;

/**
* author: Alex Kangethe
* This is an OOP PHP CRUD class
*/

class UrbanDictionary
{
	public $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function retrieve($key)
	{
		if (isset($this->data[$key])) {
			return $this->data[$key];
		} else {
			throw new Exception("No such key exists");	
		}
	}

	public function update($key, $change)
	{
		if (isset($this->data[$key])) {
			$this->data[$key] = $change;
			return $this->data;
		} else {
			throw new Exception("Sorry that slang does not exist");	
		}
	}

	public function add($key, $add)
	{
		if (isset($this->data[$key])) {
			throw new Exception("That slang already exists");	
		} else {
			$this->data[$key] = $add;
			return $this->data;
		}
	}

	public function delete($key) 
	{
		if (isset($this->data[$key])) {
			unset($this->data[$key]);
			return $this->data;
		} else {
			throw new Exception("The said key is not available\n");
		}
	}
}