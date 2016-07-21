<?php

require __DIR__ . '/vendor/autoload.php';

$GLOBALS['container'] = DI\ContainerBuilder::buildDevContainer();

require 'functions.php';
require 'routing.php';
