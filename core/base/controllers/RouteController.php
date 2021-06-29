<?php


namespace core\base\controllers;


class RouteController
{
    // Создаем статическое свойство )
    static private $_instance;

    private function __construct()
    {

    }
    private function __clone()
    {

    }
    // (шаблон проектирования SingleTon https://ru.wikipedia.org/wiki/Одиночка_(шаблон_проектирования)
    static public function getInstance(){
        if (self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance = new self;
    }



}