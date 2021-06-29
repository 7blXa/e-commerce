<?php

define('VG_ACCESS', true); // работа с доступами

header('Content-Type:text/html; charset=utf-8'); //объявляем формат заголовков
session_start(); //старт сессии

require_once 'config.php'; //подключаем config
require_once 'core/base/settings/internal_settings.php'; // хранит фундоментальные настройки (пути к шаблонам, настройки безопасности)

use core\base\exceptions\RouteException; //импортируем пространство имен
use core\base\controllers\RouteController;
try {
    RouteController::getInstance()->route(); // объясняется в уроке 5
}
catch (RouteException $e) {
    exit($e->getMessage());
}
