<?php

function myAutoloader($className) {
    $path = str_replace("\\", "/", $className);
    require_once $_SERVER['DOCUMENT_ROOT'] . "/src/" . $path . ".php";
}

spl_autoload_register('myAutoloader');

