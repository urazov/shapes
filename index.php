<?php

require __DIR__.'/vendor/autoload.php';

use Editor\Core\App;
use Editor\Responses\JsonResponse;

try{
    $app = App::getInstance();

    $app->registerRequest(array_merge($_GET, $_POST));

    $app->registerResponse(new JsonResponse());

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