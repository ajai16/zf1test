<?php

$route = new Zend_Controller_Router_Route(
    ':module/:controller/:action/*',
    array(
        'module'    => 'default',
        'controller' => 'home',
        'action'     => 'index'
    ) 
);

$router->addRoute('default', $route);