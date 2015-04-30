<?php

class  DB
{

	protected $mysqli;
	public function __construct()
	{
		$this->mysqli = new mysqli('localhost', 'root', '', 'twitter_example');
	}

	public function query($sql){
		return $this->mysqli->query($sql);
	}
}