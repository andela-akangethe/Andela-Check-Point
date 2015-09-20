<?php namespace Checkpoint1A\src;

use Checkpoint1A\src\WordInstance;
/*
* author: Alex Kangethe
* To rank words instances
*/

class WordInstance
{	
	public $word;

	public function __construct($word)
	{
		$this->word = $word;
	}

	public function rate()
	{
		if (isset($this->word["sample-sentence"])) {
			$sentence = array_count_values(
				str_word_count($this->word["sample-sentence"], 1)
			);
			return $sentence;
		} else {
			throw new Exception("There is no sample sentence provided");
			
		}
	}
}
