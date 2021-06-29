<?php

defined('VG_ACCESS') or die('Access denied'); // работа с доступами

//шаблоны польз. части
const TEMPLATE = 'templates/default/';
//шаблон админ. панели
const ADMIN_TEMPLATES = 'core/admin/views/';
//константа безопасности
const COOCKIE_VERSION = '1.0.0';
//константа для алгоритма шифрования
const CRYPT_KEY = '';
//время бездействия
const COOKIE_TIME = 60;
//система блок пароля
const BLOCK_TIME = 3;
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