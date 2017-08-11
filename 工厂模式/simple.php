<?php
/**
 * 简单工厂模式 - 计算器
 */

// 定义一个抽象类
abstract class operation
{
    protected $num_a = 0;
    protected $num_b = 0;
    protected $result = 0;
    public function __construct($a, $b){
        $this->num_a = $a;
        $this->num_b = $b;
    }
    protected abstract function getResult();
}

// 加法运算
class addAction extends operation
{
    public function getResult(){
        $this->result = $this->num_a + $this->num_b;
        return $this->result;
    }
}

// 减法运算
class subAction extends operation
{
    public function getResult(){
        $this->result = $this->num_a - $this->num_b;
        return $this->result;
    }
}

// 定义一个工厂类
class operFactory{
    private static $obj;
    public static function createFac($type, $a, $b){
        switch ($type) {
            case '+':
                self::$obj =  new addAction($a, $b);
                break;
            case '-':
                self::$obj = new subAction($a, $b);
                break;
        }
        return self::$obj;
    }
}

$resObj = operFactory::createFac('+',100,200);
echo $resObj->getResult();
