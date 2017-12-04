<?php
// Задаем константы:
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам, DIRECTORY_SEPARATOR в PHP. В PHP есть предопределённая константа DIRECTORY_SEPARATOR, содержащая разделитель пути. Для Windows это «\», для Linux и остальных — «/»
$sitePath = realpath(dirname(__FILE__) . DS) . DS;
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'IF');