<?php
namespace App\Models;

class Stat {
	public $count_true;
	public $count_false;

	public function __construct($count_true, $count_false)
	{
		$this->count_true = $count_true;
		$this->count_false = $count_false;
	}

	public function getCount()
	{
		return $this->count_true + $this->count_false;
	}

	public function getProcent()
	{
		return round(100/$this->getCount()*$this->count_true);
	}
}