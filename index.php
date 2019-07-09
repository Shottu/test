<?php

use \app\core\Router;

/* Автозагрузка классов */
spl_autoload_register(function ($class) {
    $patch = str_replace('\\', '/', $class.'.php');
    if (file_exists($patch)) {
    	require $patch;
    }
});

$route = new Router();
$route->run();
