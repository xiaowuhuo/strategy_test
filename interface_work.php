<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午8:05
 */

interface work{

    public function __construct(Strategy $strategy);

    public function run();

}