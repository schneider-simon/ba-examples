<?php

$GLOBALS['logsAmount'] = 0;

function logAction($text){
    $GLOBALS['logsAmount']++;

    echo "<pre>". $GLOBALS['logsAmount']. '. ' .  $text ."</pre>";
}