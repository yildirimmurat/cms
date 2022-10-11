<?php

require_once __DIR__ . '/vendor/autoload.php';

use CMS\Core\Application;

$app = new Application();

$app->router->get('/', function() {
    return 'main page';
});

$app->router->get('/contact', function() {
    return 'contact page';
});

$app->run();