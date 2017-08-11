<?php
// 最基本的工厂模式
class People{
	public function getName(){
		return 'my name is zhangsan';
	}
}

class PeopleFactory{
	public static function myname(){
		return new People();
	}
}

echo PeopleFactory::myname()->getName();

