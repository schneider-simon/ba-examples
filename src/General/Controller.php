<?php

namespace Examples\General;


class Controller
{
    protected function view(string $template, array $variables){
        include __DIR__ . '\..\..\views\\'. $template . '.php';
    }
}