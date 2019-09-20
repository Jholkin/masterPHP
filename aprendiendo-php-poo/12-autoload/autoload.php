<?php

function app_autoloader($clase)
{
    $clase = str_replace('\\', DIRECTORY_SEPARATOR, $clase);
    require_once 'clases/' . $clase . '.php';
}

spl_autoload_register('app_autoloader');