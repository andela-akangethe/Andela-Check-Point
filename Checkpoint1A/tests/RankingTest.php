<?php

require "../src/Ranking.php";

class WordInstanceTest extends PHPUnit_Framework_TestCase
{
	public $test;

	public function setUp()
	{
		$this->test = new WordInstance(
			[
				"Slang" => "Tight",
				"description" => "When someone performs an awesome task",
				"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
				\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
			]
		);
	}

	public function testRate()
	{
		$count = $this->test->rate();
		$this->assertTrue($count ==
				[
					"Andrei" => 2,
    				"Prosper" => 2,
				    "Have" => 1,
				    "you" => 1,
				    "finished" => 1,
				    "the" => 1,
				    "curriculum" => 1,
				    "Yes" => 1,
				    "Tight" => 3
				]
		);
	}
}