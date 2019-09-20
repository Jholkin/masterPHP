<?php

require_once 'configuracion.php';

ConfiguracionStatic::setColor('rojo');
ConfiguracionStatic::setEntorno('localhost');
ConfiguracionStatic::setNewsletter('true');

echo ConfiguracionStatic::getColor() . "<br>"
    . ConfiguracionStatic::getEntorno() . "<br>"
    . ConfiguracionStatic::getNewsletter();