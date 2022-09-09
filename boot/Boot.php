<?php

require_once (dirname(__DIR__) . '/config/App.php');
require_once (dirname(__DIR__) . '/source/Helpers/helper.php');
require_once (dirname(__DIR__) . '/routes/Route.php') ;


$routing = new \source\Router\Routing();
$routing->run();