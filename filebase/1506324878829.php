<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/3/7
 * Time: 20:24
 */
class Car{
    private function __construct(){
        echo 'this is my car.';
    }
    private static $_object = null;
    public static function getInstance(){
        if(empty(self::$_object)){
            self::$_object = new car();
        }
        return self::$_object;
    }
}
$car = Car::getInstance();