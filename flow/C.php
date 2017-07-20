<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 22:53
 */
namespace flow;

use Lib\Db;
use Lib\User;
class C{
    public function run(){
        echo __CLASS__;
        (new Db())->set(User::$userId, get_class($this));
    }
}