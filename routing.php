<?php
use Klein\Request;

require_once __DIR__ . '/vendor/autoload.php';

$router = new \Klein\Klein();

$router->respond('GET', '/ocp/bad/register', function (Request $request) {
    return action(\Examples\OCP\Bad\Classes\UserController::class, 'register', $request);
});

$router->respond('POST', '/ocp/bad/register', function (Request $request) {
    return action(\Examples\OCP\Bad\Classes\UserController::class, 'doRegister', $request);
});


$dispatch = $router->dispatch();

function action(string $controllerClass, string $action, Request $request){
    $controller = $GLOBALS['container']->get($controllerClass);
    return $controller->$action($request);
}