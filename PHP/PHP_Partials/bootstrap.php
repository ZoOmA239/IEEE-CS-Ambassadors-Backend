<?php

use Core\App;
use Core\Container;
use Core\DataBase;

$container = new Container();

$container->bind('core\DataBase', function () {
    $config = require base_path('config.php');

    return new DataBase($config['database']);
});

$db = $container->resolve('core\DataBase');

App::setContainer($container);
