<?php namespace Checkpoint1A\tests;

require "../src/UrbanDictionary.php";

class UrbanDictionary extends PHPUnit_Framework_TestCase
{
	public function testRetrieve()
	{
		$urbanObj = new UrbanDictionary(
			[
				"Tight" => [
					"description" => "When someone performs an awesome task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
					\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
				]
			]
		);
		$result = $urbanObj->retrieve("Tight");
		$this->assertEquals($result,
			[
				"description" => "When someone performs an awesome task",
				"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
				\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
			]
		);
	}

	public function testAdd()
	{
		$urbanObj = new UrbanDictionary(
			[
				"Tight" => [
					"description" => "When someone performs an awesome task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
				]
			]
		);
		$result = $urbanObj->add("Dope",
			[
				"description" => "When someone performs an awesome task",
				"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
				\nProsper: Yes.\nAndrei: Dope,Dope,Dope!!!"
			]
		);
		$this->assertEquals($result, 
			[
				"Tight" => [
					"description" => "When someone performs an awesome task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
					\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
				],
				"Dope" =>
				[
					"description" => "When someone performs an awesome task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
					\nProsper: Yes.\nAndrei: Dope,Dope,Dope!!!"
				]
			]
		);
	}

	public function testDelete()
	{
		$urbanObj = new UrbanDictionary(
			[
				"Tight" => [
					"description" => "When someone performs an awesome task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
					\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
				]
			]
		);
		$result = $urbanObj->delete("Tight");
		$this->assertEquals($result, []);
	}

	public function testUpdate()
	{
		$urbanObj = new UrbanDictionary(
			[
				"Tight" => [
					"description" => "When someone performs an awesome task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
					\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
				]
			]
		);
		$result = $urbanObj->update("Tight",
			[
				"description" => "When someone performs an horrible task",
				"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
				\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
			]
		);
		$this->assertEquals($result,
			[
				"Tight" => [
					"description" => "When someone performs an horrible task",
					"sample-sentence" => "Andrei: Prosper, Have you finished the curriculum?.
					\nProsper: Yes.\nAndrei: Tight,Tight,Tight!!!"
				]
			]
		);

	}
}
