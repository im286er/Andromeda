<?php

/**
 * Created by PhpStorm.
 * User: Jimersy Lee
 * Date: 2017/5/27
 * Time: 15:30
 */


/**
 * Class IndexController
 *
 */
class IndexController extends ControllerBase
{
    public function index(){
        $this->writer->write();
        $this->writer->hello();

    }

    public function __construct($di)
    {
        $this->_dependencyInjector=$di;
    }
}