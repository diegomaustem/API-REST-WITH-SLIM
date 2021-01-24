<?php

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

$app->get('/', 'App\Controllers\ProductController:getProducts');
//$app->get('/', ProductController::class .':getProducts');


$app->run();

?>