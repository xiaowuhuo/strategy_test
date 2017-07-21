<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午8:00
 *
 * check business state
 *
 * flow dot version change;
 *
 */
define("ROOT", __DIR__);
require_once 'Lib/Loader.php';
spl_autoload_register('Loader::autoload');

echo '<pre>';
$context = new \Lib\Context(new \strategy\v1());
$context->run();
echo '</pre>';