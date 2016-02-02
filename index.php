<?php

require __DIR__.'/vendor/autoload.php';

use Editor\Core\App;
use Editor\Responses\JsonResponse;

try{
    $app = App::getInstance();

    /**
     * Example
     */
    $input_request = [
        ['type' => 'circle', 'params' => ['color' => 'red', 'line' => 3]],
        ['type' => 'circle', 'params' => ['color' => 'green', 'line' => 2]]
    ];

    $app->registerRequest($input_request);

    $app->registerResponse(new JsonResponse());

    $app->validate();

    $app->run();

    die($app->getResult());
} catch (Exception $e) {
    $result = [
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ];

    /**
     * Example
     */
    var_dump($result);
}