<?php
class Db{
	private static $dbObj = NULL;
	private function __construct(){

	}
	private function __clone(){

	}
	private function __wakeup(){

	}
	public static function getInstance()
	{
		if(self::$dbObj === NULL){
			self::$dbObj = new self();
		}
		return self::$dbObj;
	}
	public function getName(){
		echo 'this is a singleton pattern';
	}
}

Db::getInstance()->getName();
