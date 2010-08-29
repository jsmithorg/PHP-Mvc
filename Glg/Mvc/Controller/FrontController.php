<?php

require_once "../Includes/AutoLoad.inc";

$url = (string)$_GET["url"];
$route = \Glg\Mvc\Route::createFromUrl($url);
$controller = \Glg\Mvc\Controller\ControllerFactory::create($route);
$controller->execute();

?>