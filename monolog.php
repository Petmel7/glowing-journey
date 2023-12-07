<?php
require 'vendor/autoload.php'; // Шлях до autoload.php, якщо ви використовуєте Composer

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Створення логера
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__ . '/error.log', Logger::WARNING));


// Додавання записів у лог
$log->warning('This is a warning');
$log->error('This is an error');
