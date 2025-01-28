<?php

use Slim\Factory\AppFactory;
require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);
// session_start();

require __DIR__ . '/../routes/web.php';
$app->run();
