<?php

$php_os_map = [
    'Linux' => 'linux',
];

if (!isset($php_os_map[PHP_OS])) {
    echo sprintf('Your OS: %s is not supported now', PHP_OS);
    exit(1);
}

$class = $php_os_map[PHP_OS] . '.php';
require $class;
