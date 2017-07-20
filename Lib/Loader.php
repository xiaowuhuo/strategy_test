<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 23:23
 */
class Loader{
    static public function autoload($class){
        include_once(ROOT . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php');
    }
}