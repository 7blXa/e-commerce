<?php

define('VG_ACCESS', true); // работа с доступами

header('Content-Type:text/html; charset=utf-8') //объявляем формат заголовков
session_start(); //старт сессии

require_once 'config.php'; //подключаем config
require_once 'core/base/settings/iternal_settings.php'; // хранит фундоментальные настройки (пути к шаблонам, настройки безопасности)


