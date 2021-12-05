<?php

use SONFin\Application;
use SONFin\Plugins\RouterPlugin;
use SONFin\ServiceContainer;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RouterPlugin());

$app->get('/', function () {
  echo "hello world";
});

$app->start();