<?php

require __DIR__.'/vendor/autoload.php';

use Editor\Core\App;

try{
    $app = App::getInstance();

    $app->registerRequest(array_merge($_GET, $_POST));

    $app->registerResponse();

    $app->validate();

    $app->run();

    return $app->getResult();
} catch (Exception $e) {
    $result = [
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ];

    var_dump($result);
}