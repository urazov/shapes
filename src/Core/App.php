<?php

namespace Editor\Core;

use Editor\Responses\iEditorResponse;
use Editor\Shapes\BaseShape;
use Editor\Shapes\ShapeFactory;
use Exception;

class App
{
    private static $instance = null;

    /**
     * @var array
     */
    private $input_params = array();

    /**
     * @var iEditorResponse
     */
    private $response;

    /**
     * @var BaseShape
     */
    private $shape;

    private function __construct(){}

    /**
     * @return App
     */
    public static function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = new App();
        }
        return self::$instance;
    }

    public function registerRequest(array $params)
    {
        $this->input_params = $params;
    }

    public function registerResponse(iEditorResponse $response)
    {
        $this->response = $response;
    }

    public function validate()
    {
        if(!count($this->input_params) || !array_key_exists('type', $this->input_params)){
            throw new Exception('input params are wrong');
        }

        if(is_null($this->response) || !($this->response instanceof iEditorResponse)){
            throw new Exception('response object is wrong');
        }
    }

    public function getResult()
    {
        return $this->response->getResult();
    }

    public function run()
    {
        $this->shape = ShapeFactory::getShape($this->input_params);
        $this->shape->setParams($this->input_params);

        $this->response->handleShape($this->shape);
    }
}