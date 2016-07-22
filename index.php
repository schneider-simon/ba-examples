<?php

require __DIR__ . '/vendor/autoload.php';

$GLOBALS['container'] = DI\ContainerBuilder::buildDevContainer();

require __DIR__ . '/src/functions.php';
require __DIR__ . '/src/routing.php';
