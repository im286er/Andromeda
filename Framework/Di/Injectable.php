<?php
/**
 * Created by PhpStorm.
 * User: Jimersy Lee
 * Date: 2017/5/27
 * Time: 15:11
 */

namespace Framework\Di;


use Framework\DiInterface;


/**
 * Class Injectable
 * @property \Framework\Mvc\Writer $writer
 */
abstract class Injectable
{

    protected $_dependencyInjector;

    protected $_eventsManager;





    public function setDI(DiInterface $dependenceInjector)
    {
        $this->_dependencyInjector=$dependenceInjector;
    }

    public function getDI()
    {
        return $this->_dependencyInjector;
    }


    public function setEventsManager($eventsManager){
        $this->_eventsManager=$eventsManager;
    }

    public function getEventsManager(){
        return $this->_eventsManager;
    }







}