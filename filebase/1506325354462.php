<?php
class Car {
    public $name = 'car';

    public function __clone() {
        $obj = new Car();
        $obj->name = $this->name;
    }
}
$a = new Car();
$a->name = 'new car';
$b = clone $a;
if ($a == $b) echo '==';   //true
if ($a === $b) echo '==='; //false

$str = serialize($a); //对象序列化成字符串
echo $str.'<br>';
$c = unserialize($str); //反序列化为对象
var_dump($c);