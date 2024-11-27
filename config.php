<?php
// HTTP
define('HTTP_SERVER', 'https://test.hebermann.ru/');

// HTTPS
define('HTTPS_SERVER', 'https://test.hebermann.ru/');

// DIR
define('DIR_APPLICATION', '/var/www/hebermann/data/www/test.hebermann.ru/catalog/');
define('DIR_SYSTEM', '/var/www/hebermann/data/www/test.hebermann.ru/system/');
define('DIR_IMAGE', '/var/www/hebermann/data/www/test.hebermann.ru/image/');
define('DIR_STORAGE', '/var/www/hebermann/data/www/test.hebermann.ru/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'test-hebermann');
define('DB_PASSWORD', 'yU8vL0aR5a');
define('DB_DATABASE', 'test-hebermann');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');