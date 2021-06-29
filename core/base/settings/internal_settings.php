<?php

defined('VG_ACCESS') or die('Access denied'); // работа с доступами

//шаблоны польз. части
const TEMPLATE = 'templates/default/';
//шаблон админ. панели
const ADMIN_TEMPLATE = 'core/admin/views/';
//константа безопасности
const COOKIE_VERSION = '1.0.0';
//константа для алгоритма шифрования
const CRYPT_KEY = '';
//время бездействия
const COOKIE_TIME = 60;
//система блок пароля
//константы для постраничной навигации
const QTY  = 8;
const QTY_LINKS = 3;
//хранение путей к стилям
//админ
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
//пользователь
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

use core\base\exceptions\RouteException; //импортируем пространство имен

function autoLoadNameClasses($class_name) {

    $class_name = str_replace('\\', '/', $class_name);
    // Если не подключается файл выбрасываем низкоуровневое исключение RouteException
    if(!@include_once $class_name . '.php') {
        throw new RouteException('Неверное имя файла для подключения - '. $class_name);
    }

}

spl_autoload_register('autoLoadNameClasses');

