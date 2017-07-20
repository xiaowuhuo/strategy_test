<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午8:00
 */
require_once 'interface_strategy.php';
require_once 'interface_work.php';
require_once 'v1.php';
require_once 'v2.php';
require_once 'Context.php';
require_once 'User.php';
require_once 'Enter.php';

$e = new Enter();
$e->run();